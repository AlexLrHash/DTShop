<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCardUpdateRequest extends FormRequest
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
            'first_name' => ['required'],
            'second_name' => ['required'],
            'number' => ['required'],
            'date_to' => ['required'],
            'cvv' => ['required',]
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'Вы не передали имя',
            'second_name.required' => 'Вы не передали фамилию',
            'number.required' => 'Вы не передали номер карты',
            'date_to.required' => 'Вы не срок обслуживание карты',
            'cvv.required' => 'Вы не передали cvv',
        ];
    }
}
