<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
{
    public function rules() {
        return [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'image' => 'nullable|image',
            'year' => 'required|max:255',
            'content' => 'required|max:255'

        ];
    }
}
