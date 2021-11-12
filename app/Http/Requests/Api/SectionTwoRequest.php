<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class SectionTwoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'icon' => ['required'],
            'color_icon' => ['required'],
            'url' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
        ];
    }
}
