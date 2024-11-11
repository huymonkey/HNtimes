<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{

    function index (Request $request)
    {
        $query = Article::query();

        $query->params($request->query());

        $articles = $query->with(['subCategories', 'audio', 'media', 'user', 'tags'])
            ->latest('id')
            ->paginate(10);

        return response()->json($articles, 200);
    }

    function trashes (Request $request)
    {
        $query = Article::onlyTrashed();

        $query->params($request->query());

        $trashes = $query->with(['subCategories', 'audio', 'media', 'user', 'tags'])
            ->paginate(10);

        return response()->json($trashes, 200);
    }

    function show (string $id)
    {
        $article = Article::withTrashed()->find($id);

        if (!$article) {
            return response()->json([
                'message' => 'No article found with id ' . $id
            ], 404);
        }

        return response()->json([
            'data' => $article
        ], 200);
    }

    function types ()
    {
        $types = Article::getAllType();

        return \response()->json([
            'data' => $types
        ], 200);
    }

    function store (StoreArticleRequest $request)
    {

        $data = $request->validated();

        try {

            $newArticle = DB::transaction(function () use ($data, $request) {

                $dataArticle = $request->safe()->except(['sub_categories', 'media', 'audio', 'tags']);
                $dataSubCategories = $data['sub_categories'] ?? [];
                $dataMedia = $data['media'] ?? [];
                $dataAudio = $data['audio'] ?? [];
                $dataTags = Tag::saveTags($data['tags'] ?? []);

                if ($request->hasFile('img')) {
                    $dataArticle['img'] = Storage::put('articles', $request->file('img'));
                }

                $dataArticle['status'] = Article::STATUS_PUBLISHED;
                $dataArticle['published_at'] = now();

                $dataArticle['title'] = Str::title($dataArticle['title']);
                $dataArticle['slug'] = Str::slug($dataArticle['title']);

                if ($request->hasFile('audio.file_path')) {
                    $dataAudio['file_path'] = Storage::put('audio', $request->file('audio.file_path'));
                }


                $newArticle = Article::query()->create($dataArticle);
                $newArticle->subCategories()->attach($dataSubCategories);

                if (!empty($dataMedia)) {
                    $newArticle->media()->create($dataMedia);
                }

                if (!empty($dataAudio)) {
                    $newArticle->audio()->create($dataAudio);
                }

                if (!empty($dataTags)) {
                    $newArticle->tags()->attach($dataTags);
                }

                return $newArticle->load(['subCategories', 'media', 'audio', 'tags']);

            });

            return \response()->json([
                'message' => 'Create new article success !',
                'data' => $newArticle,
                'redirect' => route('admin.articles'),
            ], Response::HTTP_CREATED);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }

    function restore (string $id)
    {
        $article = Article::query()->onlyTrashed()->find($id);

        if (!$article) {
            return response()->json([
                'message' => 'No article found with id ' . $id
            ], 404);
        }

        try {

            $article->restore();

            return \response()->json([
                'message' => 'Restore article success !'
            ], 200);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }


    function restoreAll ()
    {
        try {

            $trashesArticle = Article::onlyTrashed();

            if ($trashesArticle->count() == 0) {
                return \response()->json([
                    'message' => 'No article in trash !'
                ], 400);
            }

            $trashesArticle->each(function (Article $article) {
                $article->restore();
            });

            return \response()->json([
                'message' => 'Restore all article success !'
            ], 200);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    function update (UpdateArticleRequest $request, string $id)
    {
        $article = Article::with(['subCategories', 'media', 'audio', 'tags', 'user'])->find($id);

        if (!$article) {
            return response()->json([
                'message' => 'No article found with id ' . $id
            ], 404);
        }

        $data = $request->validated();

        try {

            DB::transaction(function () use ($data, $request, $article) {

                $dataArticle = $request->safe()->except(['sub_categories', 'media', 'audio', 'tags']);
                $dataSubCategories = $data['sub_categories'] ?? [];
                $dataMedia = $data['media'] ?? [];
                $dataAudio = $data['audio'] ?? [];
                $dataTags = Tag::saveTags($data['tags'] ?? []);

                if ($request->hasFile('img')) {
                    $dataArticle['img'] = Storage::put('articles', $request->file('img'));
                }

                $dataArticle['status'] = Article::STATUS_PUBLISHED;
                $dataArticle['published_at'] = now();

                $dataArticle['title'] = Str::title($dataArticle['title']);
                $dataArticle['slug'] = Str::slug($dataArticle['title']);
                $dataArticle['is_trending'] ??= 0;

                if ($request->hasFile('audio.file_path')) {
                    $dataAudio['file_path'] = Storage::put('audio', $request->file('audio.file_path'));
                }

                $currentImg = $article->img;
                $currentAudioFilePath = $article->audio->file_path ?? null;

                if ($currentAudioFilePath) {
                    $currentAudioFilePath = $article->audio->file_path;
                }

                $article->update($dataArticle);

                $article->subCategories()->sync($dataSubCategories);

                if (!empty($dataMedia)) {
                    $article->media()->updateOrCreate(
                        ['article_id' => $article->id],
                        $dataMedia
                    );
                }

                if (!empty($dataAudio)) {
                    $article->audio()->updateOrCreate(
                        ['article_id' => $article->id],
                        $dataAudio
                    );
                }

                if (!empty($dataTags)) {
                    $article->tags()->sync($dataTags);
                }

                if (
                    $request->hasFile('img')
                    && $currentImg
                    && Storage::exists($currentImg)
                ) {
                    Storage::delete($currentImg);
                }

                if (
                    $request->hasFile('audio.file_path')
                    && $currentAudioFilePath
                    && Storage::exists($currentAudioFilePath)
                ) {
                    Storage::delete($currentAudioFilePath);
                }

            });

            return \response()->json([
                'message' => 'Update article success !',
                'data' => $article,
            ], Response::HTTP_CREATED);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    function softDelete (string $id)
    {

        $article = Article::query()->find($id);

        if (!$article) {
            return response()->json([
                'message' => 'No article found with id ' . $id
            ], 404);
        }

        try {

            $article->delete();

            return \response()->json([], 204);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }

    function delete (string $id)
    {
        $article = Article::query()->onlyTrashed()->find($id);

        if (!$article) {
            return response()->json([
                'message' => 'No article found with id ' . $id
            ], 404);
        }

        try {

            DB::transaction(function () use ($article) {

                $article = $article->load(['audio']);

                Article::deleteArticle($article);

            });

            return \response()->json([], 204);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }

    function deleteAll ()
    {
        try {

            $trashesArticle = Article::onlyTrashed()->with('audio');

            if ($trashesArticle->count() == 0) {
                return \response()->json([
                    'message' => 'No article in trash !'
                ], 400);
            }

            DB::transaction(function () use ($trashesArticle) {

                $trashesArticle->each(function (Article $article) {
                    Article::deleteArticle($article);
                });

            });

            return \response()->json([], 204);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error! Please try again in a few minutes.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }


}
