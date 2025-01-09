<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:25'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatorio',
            'name.min' => 'O nome deve ter pelo menos :min caracteres.',
            'name.max' => 'O nome deve ter no máximo :max caracteres.',
            'email.required' => 'O email é um campo obrigatorio.',
            'email.email' => 'O email inserido não é valido',
            'email.unique' => 'Esse email já pertence á um usuário.',
            'password.required' => 'A senha é obrigatorio',
            'password.min' => 'A senha deve ter pelo menos :min caracteres.',
            'password.max' => 'A senha deve ter no máximo :max caracteres.',
        ];
    }
}
