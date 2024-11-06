<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    const DEFAULT_IMAGE = 'default/no-image.jpg';

    protected $fillable = [
        'name',
        'slug',
        'ordinal',
        'img_cover',
    ];

    protected $attributes = [
        'img_cover' => Category::DEFAULT_IMAGE
    ];

    /* RELATION */
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public static function getAll()
    {
        return Category::all();
    }

    public static function getAllWithSubCategory($isTrashes = false)
    {

        return Category::query()
            ->when($isTrashes, function (Builder $query) {
                $query->onlyTrashed();
            })
            ->select('id', 'name', 'ordinal', 'img_cover')
            ->orderBy('ordinal')
            ->orderBy('name')
            ->with('subCategories', function ($query) {
                $query->select('id', 'category_id', 'name', 'ordinal')
                    ->orderBy('ordinal')
                    ->orderBy('name');
            })
            ->get();
    }

}
