<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;

    protected $fillable = [
        'title',
        'file_path',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
