<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'icon'=> ['sometimes'],
            'title'=> ['sometimes'],
            'text'=> ['sometimes'],
            'iframe'=> ['sometimes'],

        ];
    }

}
