<?php

namespace App\Http\Requests\Score;

use Illuminate\Foundation\Http\FormRequest;

class ScoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'icon' => 'sometimes',
            'number' => 'sometimes',
            'name' => 'sometimes',
        ];
    }

}
