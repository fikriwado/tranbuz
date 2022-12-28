<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePegawai extends FormRequest
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
        $id = $this->request->get('id');
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'status' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'nama.required'     => 'Nama tidak boleh kosong',
            'email.required'    => 'E-mail tidak boleh kosong',
            'status.required'    => 'Status tidak boleh kosong',

            'nama.string'     => 'Nama harus aphanumeric',

            'nama.max'     => 'Nama maksimal 255 karakter',
            'email.max'    => 'E-mail maksimal 255 karakter',
            
            'email.email'   => 'E-mail tidak sesuai format',
            'email.unique'  => 'E-mail sudah digunakan',
        ];
    }
}
