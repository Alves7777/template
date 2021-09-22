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
            'title_1' => ['required'],
            'title_2' => ['required'],
            'title_3' => ['required'],
            'title_4' => ['required'],
            'title_5' => ['required'],
            'title_6' => ['required'],
            'title_7' => ['required'],
            'title_8' => ['required'],
            'title_9' => ['required'],
            'title_10' => ['required'],
            'title_11' => ['required'],
            'logo' => ['required']
        ];
    }

}
