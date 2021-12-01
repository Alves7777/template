<?php

namespace App\Http\Requests\Title;

use Illuminate\Foundation\Http\FormRequest;

class TitleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['sometimes'],
            'color_title' => ['sometimes'],
            'text' => ['sometimes'],
        ];
    }

}



