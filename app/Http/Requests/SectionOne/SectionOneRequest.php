<?php

namespace App\Http\Requests\SectionOne;

use Illuminate\Foundation\Http\FormRequest;

class SectionOneRequest extends FormRequest
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
            'description'=> ['sometimes'],
            'text_button'=> ['sometimes'],
            'color_button'=> ['sometimes'],
            'url_button'=> ['sometimes'],
            'text_video'=> ['sometimes'],
            'url_video'=> ['sometimes'],
            'icon_video'=> ['sometimes'],
            'color_icon_video'=> ['sometimes'],
            'color_text_video'=> ['sometimes'],
            'image' => ['sometimes']
        ];
    }

}
