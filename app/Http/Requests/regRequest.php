<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regRequest extends FormRequest
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
            'username'=>'required|min:3|max:25',
            'email'=>'required|email',
            'password'=>'required||min:4',
        ];
    }


    public function messages(): array
    {
        return [
            'username.required'=>'Ad/soyad daxil edilməyib!',
            'username.min'=>'Ad/soyad minimum 3 simvol olmalıdır!',
            'username.max'=>'Ad/soyad maksimum 25 simvol olmalıdır!',

            'email.required'=>'Email daxil edilməyib!',
            'email.email'=>'Email düzgün daxil edilməyib(@,com,az kimi simvollardan istifadə edin)!',

            'password.required'=>'Parol daxil edilməyib!',
            'password.min'=>'Parol minimum 4 simvol olmalıdır!',
        ];
    }
}
