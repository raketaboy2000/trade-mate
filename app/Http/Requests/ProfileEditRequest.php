<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileEditRequest extends FormRequest
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



        $id = $this->route('profile');

        return [
            'name' => 'required|min:3|max:20|string',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                \Illuminate\Validation\Rule::unique('users')->ignore($id),
            ],
            'password' => 'nullable|string|min:8|max:20|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Минимальная длинна логина 3 символа',
            'email.unique' => 'Такой email уже занят',
        ];
    }
}
