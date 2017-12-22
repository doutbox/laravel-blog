<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterFormRequest extends FormRequest
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
            'title' => 'required|unique:footers|max:255',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O title não pode ser em branco',
            'title.unique' => 'Jã existe um footer cadastrado com esse nome',
            'content.required' => 'O content não pode ser em branco',
        ];
    }
}
