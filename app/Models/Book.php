<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'author', 'image_path'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function favorites() {
        return $this->belongsToMany(User::class, Favorite::class);
    }

    function deleteImage() {

        if (!$this->image_path)
            return;

        $file = storage_path('app/' . $this->image_path);

        if (!file_exists($file))
            return;

        unlink($file);
    }

}
