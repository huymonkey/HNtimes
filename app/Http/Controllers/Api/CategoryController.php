<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mockery\Exception;

class CategoryController extends Controller
{

    // METHOD: GET

    /**
     * Display a listing with sub category of the resource.
     */
    public function withSubCategory()
    {
        $categories = Category::getAllWithSubCategory();

        return response()->json([
            'data' => $categories
        ], 200);
    }

    /**
     * Display show one category of the resource.
     */
    public function show(string $id) {

        $category = Category::query()->find($id);

        if (!$category) {
            return \response()->json([
                'message' => 'No category found with id ' . $id
            ], 404);
        }

        return \response()->json([
            'data' => $category
        ], 200);
    }

    /**
     * Display a listing all category in trash of the resource.
     */
    public function trashes()
    {
        $data = Category::getAllWithSubCategory(true);

        return \response()->json([
            'data' => $data
        ], 200);
    }



    // METHOD: POST
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();

        try {
            if ($request->hasFile('img_cover')) {
                $data['img_cover'] = Storage::put('categories', $request->file('img_cover'));
            }

            $data['name'] = Str::title($data['name']);
            $data['slug'] = Str::slug($data['name']);

            $category = Category::query()->create($data);

            return \response()->json([
                'message' => 'Create new category success !',
                'data' => $category
            ], 201);
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


    // METHOD: PUT

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = Category::query()->find($id);

        if (!$category) {
            return \response()->json([
                'message' => 'No category found with id ' . $id
            ], 404);
        }

        $data = $request->validated();

        try {

            if ($request->hasFile('img_cover')) {
                $data['img_cover'] = Storage::put('categories', $request->file('img_cover'));
            }

            $data['name'] = Str::title($data['name']);
            $data['slug'] = Str::slug($data['name']);

            $oldImage = $category->img_cover;

            $category->update($data);

            if (
                $request->hasFile('img_cover')
                && $oldImage != Category::DEFAULT_IMAGE
                && $oldImage
                && Storage::exists($oldImage)
            ) {
                Storage::delete($oldImage);
            }

            return \response()->json([
                'message' => 'Update category success !',
                'data' => $category
            ], 200);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }

    /**
     * Restore resource from storage.
     */
    public function restore(string $id)
    {
        $category = Category::onlyTrashed()->find($id);

        if (!$category) {
            return \response()->json([
                'message' => 'No category in trash found with id ' . $id
            ], 404);
        }

        try {

            $category->restore();

            return \response()->json([
                'message' => 'Restore category success !'
            ], 200);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }

    /**
     * Restore all resource from storage.
     */
    public function restoreAll()
    {
        try {

            $categoriesInTrash = Category::onlyTrashed()->count();

            if ($categoriesInTrash == 0) {
                return \response()->json([
                    'message' => 'No categories in trash'
                ], 400);
            }

            Category::onlyTrashed()->each(function (Category $category) {
                $category->restore();
            });

            return \response()->json([
                'message' => 'Restore all categories success !'
            ], 200);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }


    // METHOD: DELETE

    /**
     * softDelete resource from storage.
     */
    public function softDelete(string $id)
    {
        $category = Category::query()->find($id);

        if (!$category) {
            return \response()->json([
                'message' => 'No category found with id ' . $id
            ], 404);
        }

        try {

            $category->delete();

            return \response()->json([], 204);

        }
        catch (\Throwable $e) {

            Log::error(
                __CLASS__ . '@' . __FUNCTION__,
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'message' => 'System error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);

        }

    }
}
