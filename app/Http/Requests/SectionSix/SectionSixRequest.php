<?php

namespace App\Http\Requests\SectionSix;

use Illuminate\Foundation\Http\FormRequest;

class SectionSixRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'image'=> ['sometimes'],
            'sub_title'=> ['sometimes'],
            'sub_text'=> ['sometimes'],
            'link_twitter'=> ['sometimes'],
            'link_facebook'=> ['sometimes'],
            'link_instagram'=> ['sometimes'],
            'link_linkedin'=> ['sometimes'],

            'title'=> ['sometimes'],
            'text'=> ['sometimes'],
        ];
    }

}
