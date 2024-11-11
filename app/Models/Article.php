<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    const TYPE_FEATURE = 'feature';
    const TYPE_NORMAL = 'normal';

    const STATUS_PENDING = 'pending';
    const STATUS_CANCELED = 'canceled';
    const STATUS_COMING_SOON = 'coming_soon';
    const STATUS_PUBLISHED = 'published';

    protected $fillable = [
        'media_id',
        'audio_id',
        'author_id',
        'title',
        'slug',
        'img',
        'description',
        'content',
        'views',
        'is_trending',
        'type',
        'status',
        'canceled_reason',
        'published_at',
    ];

    protected $attributes = [
        'status' => Article::STATUS_PUBLISHED,
        'is_trending' => 0,
    ];

    public function subCategories()
    {
        return $this->belongsToMany(SubCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function audio()
    {
        return $this->hasOne(Audio::class);
    }

    public function media()
    {
        return $this->hasOne(Media::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeParams($query, $params = [])
    {

        $_sort = $params['_sort'] ?? null;
        $_term = $params['_term'] ?? null;

        if ($_sort) {
            switch ($_sort) {
                case "title": {
                    $query->orderBy('title');
                    break;
                }
                case "-title": {
                    $query->orderByDesc('title');
                    break;
                }
                case "views": {
                    $query->orderBy('views');
                    break;
                }
                case "-views": {
                    $query->orderByDesc('views');
                    break;
                }
                case "created_at": {
                    $query->orderBy('created_at');
                    break;
                }
                case "-created_at": {
                    $query->orderByDesc('created_at');
                    break;
                }
                case "updated_at": {
                    $query->orderBy('updated_at');
                    break;
                }
                case "-updated_at": {
                    $query->orderByDesc('updated_at');
                    break;
                }
            }
        }

        if ($_term) {
            $query->whereAny(['title', 'type', 'is_trending'], 'LIKE', "%$_term%");
            $query->orWhere(function (Builder $query) use ($_term) {
                $query->whereAny(['title', 'type', 'is_trending'], 'LIKE', "%$_term");
            });
            $query->orWhere(function (Builder $query) use ($_term) {
                $query->whereAny(['title', 'type', 'is_trending'], 'LIKE', "%$_term%");
            });
        }

        return $query;
    }

    public static function getAllType()
    {
        $reflection = new \ReflectionClass(__CLASS__);

        $constants = $reflection->getConstants();

        $types = [];

        foreach ($constants as $name => $value) {
            if (str_starts_with($name, 'TYPE_')) {
                $types[] = $value;
            }
        }

        return $types;
    }

    public static function deleteArticle ($article)
    {
        $audioFilePath = $article->audio->file_path ?? null;

        if (
            $article->img
            && Storage::exists($article->img)
        ) {
            Storage::delete($article->img);
        }

        if (
            $audioFilePath
            && Storage::exists($article->audio->file_path)
        ) {
            Storage::delete($article->audio->file_path);
        }

        $article->subCategories()->detach();
        $article->audio()->delete();
        $article->media()->delete();
        $article->tags()->detach();
        $article->comments()->delete();
        $article->forceDelete();
    }

}
