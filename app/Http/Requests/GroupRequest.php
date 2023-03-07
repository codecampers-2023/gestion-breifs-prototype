<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nom_groupe' => ['required','string', 'max:50', 'min:4'],
            'Logo' => ['mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
}
