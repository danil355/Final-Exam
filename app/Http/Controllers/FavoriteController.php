<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    function toggle(Book $book) {

        $favorites = $book->favorites();
        $exists = auth()->user()->isFavorite($book);

        if ($exists) {
            $favorites->detach(auth()->id());
        } else {
            $favorites->attach(auth()->id());
        }

        return [
            'favorite' => !$exists
        ];
    }

    function index() {

        $books = auth()->user()
            ->favorites()
            ->latest()
            ->paginate(10);

        return view('books.favorites', [
            'books' => $books
        ]);
    }
}
