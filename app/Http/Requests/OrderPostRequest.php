<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderPostRequest extends FormRequest
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
            'name' => 'required|max:15|',
            'email' => 'required|email',
            'mobile_number' => 'required|regex:/^(\+36)[0-9]{9}$/',
            'message' => 'max:255',
            'kit' => 'required|numeric|max:1',
            'brakes' => 'required|numeric|max:1',
            'rim' => 'required|numeric|max:1',
            'battery' => 'required|numeric|max:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Имя обязательно',
            'mobile_number.required' => 'Номер телефона обязательно'
        ];
    }
}
