<?php

namespace App\Http\Requests\User;

use App\Http\Requests\JsonFormRequest;

class CreateUserRequest extends JsonFormRequest
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
        return [
            'name' => 'required|string|min:3|unique:users',
            'username' => 'required|string|min:3|unique:users',
            'password' => 'required|string|min:5'
        ];
    }
}
