<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderPostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|max:25',
            'email' => 'required|email',
            'mobile_number' => ['required', 'regex:/^(\\+38)[0-9]{10}$/'],
            'message' => 'nullable|max:255',
            'kit_id' => 'required|exists:products,id',
            'brakes_id' => 'required|exists:products,id',
            'rim_size' => 'required|string|max:20',
            'battery_id' => 'required|exists:products,id',
            'display_id' => 'required|exists:products,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Имя обязательно',
            'email.required' => 'Email обязателен',
            'email.email' => 'Неверный формат email',
            'mobile_number.required' => 'Номер телефона обязателен',
            'mobile_number.regex' => 'Формат телефона +380*********',
        ];
    }
}