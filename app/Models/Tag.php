<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

    public static function saveTags($data): array
    {
        $listTags = array_map(function ($name) {
            return [
                ['name' => $name],
                ['slug' => Str::slug($name)]
            ];
        }, $data);

        $idTags = [];

        foreach ($listTags as $item) {
            $tag = Tag::updateOrCreate(
                $item[0],
                $item[1]
            );
            array_push($idTags, $tag->id);
        }

        return $idTags;
    }
}
