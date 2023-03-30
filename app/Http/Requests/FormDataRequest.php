<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:5',
            'country' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'message' => 'required|string|max:1000'
        ];
    }
    public function messages(): array
    {
        return [      
            'name.required' => 'Name is required',
            'name.string' => 'Name should only contain letters',            
            'name.min' => 'Name should have at least 5 characters',
            'country.required' => 'Please provide a country',
            'country.string' => 'Please provide a country',
            'email.required' => 'Please provide a valid email address',
            'email.email' => 'Please provide a valid email address',
            'password.required' => 'Please provide a password',
            'message.required' => 'Please provide a message',
            'message.string' => 'Please provide a message',
            'message.max' => 'Message can only be 1000 characters'
        ];
    }
}
