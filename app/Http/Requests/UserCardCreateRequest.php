<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCardCreateRequest extends FormRequest
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
    //TODO make a regex for validation number
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
        return ['first_name.required' => 'Вы не передали имя '];
    }
}
