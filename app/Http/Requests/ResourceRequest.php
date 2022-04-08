<?php

namespace App\Http\Requests;

class ResourceRequest extends BaseFormRequest
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
        return [
            'name' => [
                'required',
                'max:100',
                Rule::unique('resources')->ignore($this->resource)
            ]
        ];
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
            'name.max'       => 'Name name must be no longer than 100 characters.',
            'name.unique'    => 'Name name already exists.'
        ];
    }
}
