<?php

namespace App\Http\Requests\SectionThree;

use Illuminate\Foundation\Http\FormRequest;

class SectionThreeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['sometimes'],
            'text' => ['sometimes'],
            'photo' => ['sometimes'],
            'title_two' => ['sometimes'],
            'text_two' => ['sometimes'],
            'sub_title' => ['sometimes'],
            'sub_text' => ['sometimes'],
            'icon' => ['sometimes'],
            'color_icon' => ['sometimes'],
            'text_three' => ['sometimes'],
        ];
    }

}



