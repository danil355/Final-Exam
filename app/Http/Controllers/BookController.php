<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookFormRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {

        $books = Book::query()
            ->latest()
            ->paginate(10);

        return view('books.index', [
            'books' => $books
        ]);
    }

    public function create() {
        $this->authorize('create', Book::class);

        return view('books.form');
    }

    public function store(BookFormRequest $request) {
        $this->authorize('create', Book::class);

        $data = $request->validated();

        /** @var User $user */
        $user = auth()->user();

        /** @var Book $book */
        $book = $user->books()
            ->create($data);

        $this->uploadImage($request, $book);

        return redirect()->route('books.show', $book);
    }

    public function show(Book $book) {
        return view('books.show', [
            'book' => $book
        ]);
    }

    public function edit(Book $book) {
        $this->authorize('update', $book);

        return view('books.form', [
            'book' => $book
        ]);
    }

    public function update(BookFormRequest $request, Book $book) {
        $this->authorize('update', $book);
        $data = $request->validated();

        $book->update($data);
        $this->uploadImage($request, $book);

        return redirect()->route('books.show', $book);
    }

    public function destroy(Book $book) {
        $this->authorize('delete', $book);
        $book->deleteImage();
        $book->delete();
        return redirect()->route('books.index');
    }

    protected function uploadImage(BookFormRequest $request, Book $book) {

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images');

            $book->deleteImage();

            $book->update([
                'image_path' => $path
            ]);

        }

    }


}
