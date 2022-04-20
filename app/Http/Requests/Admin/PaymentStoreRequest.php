<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStoreRequest extends FormRequest
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
            'status' =>'required',
            'statuses' =>'nullable',
            'deathdate' => 'requried',
            'deathdates' => 'nullable',
            'payment type'=>'required',
            'familyhead_id'=>'nullable',
            'depend_id'=>'nullable',
            
        ];
    }
}
