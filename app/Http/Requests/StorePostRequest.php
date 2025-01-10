<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:200',
            'body' => 'required|min:10|max:2000'
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
            'title.required' => 'O titulo é obrigatorio.',
            'title.min' => 'O titulo deve ter pelo menos :min caracteres.',
            'title.max' => 'O titulo deve ter no máximo :max caracteres.',
            'body.required' => 'O texto é obrigatorio.',
            'body.min' => 'O texto deve ter pelo menos :min caracteres',
            'body.max' => 'O texto deve ter no máximo :max caracteres.'
        ];
    }
}
