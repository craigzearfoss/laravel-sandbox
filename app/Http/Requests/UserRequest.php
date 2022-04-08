<?php

namespace App\Http\Requests;

class UserRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($this->user)
            ],
            'email' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($this->user)
            ]
        ];

        if (empty($this->user->id)) {
            $rules['password'] = [
                'required',
                'max:255',
                'confirmed',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols() //->uncompromised()
            ];
        }

        return $rules;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'  => 'Name is required.',
            'name.max'       => 'Name name must be no longer than 255 characters.',
            'name.unique'    => 'Name name already exists.',
            'email.required' => 'Email is required.',
            'email.max'      => 'Email name must be no longer than 255 characters.',
            'email.unique'   => 'Email name already exists.',
            'password.max'   => 'Password must be no longer than 255 characters.'
        ];
    }
}
