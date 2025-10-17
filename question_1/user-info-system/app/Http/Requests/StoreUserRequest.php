<?php

namespace App\Http\Requests;

use App\Http\Models\User;
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
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email', 'unique:users,email'],
            'username'=> ['required','string', 'alpha_num', 'min:3', 'max:20', 'unique:users,username'],
            'password' =>['required','string','min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
        ];
    }
}
