<?php

namespace App\Http\Requests\Topbar;

use Illuminate\Foundation\Http\FormRequest;

class TopbarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'icon_email' => ['required'],
            'email' => ['required'],
            'icon_phone' => ['required'],
            'phone' => ['required'],
            'color_top_bar' => ['required'],
            'icon_1' => ['sometimes'],
            'icon_2' => ['sometimes'],
            'icon_3' => ['sometimes'],
            'icon_4' => ['sometimes'],
            'link_phone' => ['sometimes'],
            'link_email' => ['sometimes'],
            'link_icon_1' => ['sometimes'],
            'link_icon_2' => ['sometimes'],
            'link_icon_3' => ['sometimes'],
            'link_icon_4' => ['sometimes'],
        ];
    }

}
