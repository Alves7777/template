<?php

namespace App\Http\Requests\Navbar;

use Illuminate\Foundation\Http\FormRequest;

class NavbarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_1' => ['sometimes'],
            'title_2' => ['sometimes'],
            'title_3' => ['sometimes'],
            'title_4' => ['sometimes'],
            'title_5' => ['sometimes'],
            'title_6' => ['sometimes'],
            'title_7' => ['sometimes'],
            'title_8' => ['sometimes'],
            'title_9' => ['sometimes'],
            'title_10' => ['sometimes'],
            'title_11' => ['sometimes'],
            'logo' => ['sometimes'],

            'link_title_1' => ['sometimes'],
            'link_title_2' => ['sometimes'],
            'link_title_3' => ['sometimes'],
            'link_title_4' => ['sometimes'],
            'link_title_5' => ['sometimes'],
            'link_title_6' => ['sometimes'],
            'link_title_7' => ['sometimes'],
            'link_title_8' => ['sometimes'],
            'link_title_9' => ['sometimes'],
            'link_title_10' => ['sometimes'],
            'link_title_11' => ['sometimes'],

        ];
    }

}
