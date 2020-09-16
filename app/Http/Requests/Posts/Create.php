<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => ['required', 'string'],
            'short_description' => ['required', 'string'],
            'author' => ['required', 'string'],
            'img' => ['required', 'image'],
            'video' => ['nullable', 'string'],
            'audio' => ['nullable', 'mimes:mpga,wav'],
            'slider' => ['nullable'],
            'description' => ['required', 'string'],
        ];

        return $rules;
    }
}
