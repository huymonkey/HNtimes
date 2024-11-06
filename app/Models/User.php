<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN = 'admin';
    const ROLE_COLUMNIST = 'columnist';
    const ROLE_READER = 'reader';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'google_id',
        'name',
        'email',
        'password',
        'email_verified_at',
        'email_verification_token',
        'avatar',
        'role',
        'is_lock',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    /*CHECK ROLE*/
    public function isAdmin() {
        return $this->role == self::ROLE_ADMIN;
    }

    public function isColumnist() {
        return $this->role == self::ROLE_COLUMNIST;
    }

    public function isReader() {
        return $this->role == self::ROLE_READER;
    }


    /*CHECK LOCK*/
    public function isLock() {
        return $this->is_lock == true;
    }


    /*CHECK VERIFY*/
    public function isUnverified() {
        return $this->email_verified_at === NULL;
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function replyComments()
    {
        return $this->hasMany(ReplyComment::class);
    }

}
