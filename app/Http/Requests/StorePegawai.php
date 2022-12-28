<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Actions\Fortify\PasswordValidationRules;
use Laravel\Jetstream\Jetstream;

class StorePegawai extends FormRequest
{
    use PasswordValidationRules;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : ''
        ];
    }

    public function messages()
    {
        return [
            'nama.required'     => 'Nama tidak boleh kosong',
            'email.required'    => 'E-mail tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',

            'nama.string'     => 'Nama harus aphanumeric',
            'email.string'    => 'E-mail harus aphanumeric',
            'password.string' => 'Password harus aphanumeric',

            'nama.max'     => 'Nama maksimal 255 karakter',
            'email.max'    => 'E-mail maksimal 255 karakter',
            'password.max' => 'Password maksimal 255 karakter',
            
            'email.email'   => 'E-mail tidak sesuai format',
            'email.unique'  => 'E-mail sudah digunakan',
            'password.confirmed' => 'Password tidak cocok'
        ];
    }
}
