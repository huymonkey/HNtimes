<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request, string $categoryID)
    {
        $category = Category::query()->find($categoryID);

        if (!$category) {
            return response()->json([
                'message' => 'No category found with id ' . $categoryID
            ], 404);
        }

        $data = $request->validated();

        try {

            $data['category_id'] = $categoryID;
            $data['name'] = Str::title($data['name']);
            $data['slug'] = Str::slug($data['name']);

            $subCategory = SubCategory::query()->create($data);

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

        return \response()->json([
            'message' => 'Create new sub category success !',
            'data' => $subCategory
        ], 201);
    }

    /**
     * Update resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, string $id)
    {
        $subCategory = SubCategory::query()->find($id);

        if (!$subCategory) {
            return response()->json([
                'message' => 'No sub category found with id ' . $id
            ], 404);
        }

        $data = $request->validated();

        try {

            $data['name'] = Str::title($data['name']);
            $data['slug'] = Str::slug($data['name']);

            $subCategory->update($data);

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

        return \response()->json([
            'message' => 'Update sub category success !',
            'data' => $subCategory
        ]);
    }

    /**
     * Remove resource in storage.
     */
    public function delete(string $id)
    {
        $subCategory = SubCategory::query()->find($id);

        if (!$subCategory) {
            return \response()->json([
                'message' => 'No sub category found with id ' . $id
            ], 404);
        }

        try {
            $articlesCount = $subCategory->articles->count();

            if ($articlesCount != 0) {
                return \response()->json([
                    'message' => "Sub category have $articlesCount article. Doesn't delete this sub category !"
                ], 400);
            }

            $subCategory->delete();

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

        return \response()->json([], 204);
    }

}
