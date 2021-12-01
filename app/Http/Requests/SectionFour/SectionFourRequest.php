<?php

namespace App\Http\Requests\SectionFour;

use Illuminate\Foundation\Http\FormRequest;

class SectionFourRequest extends FormRequest
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
            'icon' => ['sometimes'],
            'color_icon' => ['sometimes'],
            'sub_title' => ['sometimes'],
            'sub_text' => ['sometimes'],
            'url' => ['sometimes'],
        ];
    }

}



