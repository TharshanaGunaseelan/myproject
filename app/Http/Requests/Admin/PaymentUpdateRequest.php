<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PaymentUpdateRequest extends FormRequest
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
    { $payment = $this->payment;
        return [
            'status' =>'required',
            'deathdate' => 'required',
            'payment type'=>'required',
            'familyhead_id'=>'nullable',
            'depend_id'=>'nullable',
            
            
            
        ];
    }
}
