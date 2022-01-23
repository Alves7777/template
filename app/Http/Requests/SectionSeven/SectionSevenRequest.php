<?php

namespace App\Http\Requests\SectionSeven;

use Illuminate\Foundation\Http\FormRequest;

class SectionSevenRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'=> ['sometimes'],
            'color_title'=> ['sometimes'],
            'text'=> ['sometimes'],

            'sub_title'=> ['sometimes'],
            'sub_text'=> ['sometimes'],

        ];
    }

}
