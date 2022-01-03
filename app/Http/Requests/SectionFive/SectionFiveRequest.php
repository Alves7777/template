<?php

namespace App\Http\Requests\SectionFive;

use Illuminate\Foundation\Http\FormRequest;

class SectionFiveRequest extends FormRequest
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
            'image'=> ['sometimes'],
            'url'=> ['sometimes'],
            'background'=> ['sometimes'],
            'text_one'=> ['sometimes'],
        ];
    }

}




