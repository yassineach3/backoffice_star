<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StarRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha',
            'description' => 'required|min:10',
            'image' => 'required',
            'image.*' => 'image|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
