<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use JetBrains\PhpStorm\ArrayShape;

class OrderPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    #[ArrayShape([
        'name' => "string",
        'email' => "string",
        'phonefield' => "string",
        'message' => "string",
        'kit' => "string",
        'brakes' => "string",
        'rim' => "string",
        'battery' => "string"
    ])] public function rules(): array
    {
        return [
            'name' => 'required|max:25|',
            'email' => 'required|email',
            'phonefield' => 'phone:UA',
//            'mobile_number' => 'required|regex:/^(\+38)[0-9]{10}|(38)[0-9]{10}|(8)[0-9]{10}|[0-9]{10}$/',
//            'mobile_number' => 'required|regex:/^(\+38)[0-9]{10}$/',
            'message' => 'max:255',
            'kit' => 'required|numeric|max:3',
            'brakes' => 'required|numeric|max:3',
            'rim' => 'required|numeric|max:3',
            'battery' => 'required|numeric|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Имя обязательно',
            'email.required' => 'email обязателен',
            'email.email' => 'не правильный формат email',
//            'mobile_number.regex' => 'Только украинские номера',
//            'mobile_number.required' => 'Номер телефона обязательно'
        ];
    }
}
