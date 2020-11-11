<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use function Psy\debug;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    function books() {
        return $this->hasMany(Book::class);
    }

    function favorites() {
        return $this->belongsToMany(Book::class, Favorite::class);
    }


    function isFavorite(Book $book) {

        return $this->favorites()
            ->where('book_id', $book->id)
            ->exists();



    }

}
