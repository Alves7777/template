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
            'logo' => ['sometimes']
        ];
    }

}
