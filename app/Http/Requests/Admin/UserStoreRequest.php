<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'title' =>'required',
            'firstname' => 'required',
            'lastname'=>'required',
            'email'=>'required |email|unique:users',
            'address' => 'required',
            'role_id' => 'required',
            'village_id' => 'required_if:role_id,3',
            'nic' =>'required',
            'phonenumber' =>'required',
            'password' =>'required | confirmed | string | min:8',
            
        ];
    }
}
