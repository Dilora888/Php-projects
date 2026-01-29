<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
                'unique:books,title'
            ],
            'author' => [
                'required',
                'string',
                'max:100'
            ],
            'genre' => [
                'required',
                'string'
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.unique' => 'This book already exists',
            'author.required' => 'Author is required',
            'genre.required' => 'Genre is required',
        ];
    }
}
