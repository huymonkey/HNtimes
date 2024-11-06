<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    const TYPE_VIDEO = 'video';
    const TYPE_LIVE = 'live';


    protected $fillable = [
        'file_path',
        'type'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
