<?php

namespace App\Http\Requests\CollectionsImages;

use Illuminate\Foundation\Http\FormRequest;

class CollectionsImagesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'=> ['sometimes'],
            'sub_title'=> ['sometimes'],
            'photo'=> ['sometimes'],
            'text'=> ['sometimes'],
        ];
    }
}
