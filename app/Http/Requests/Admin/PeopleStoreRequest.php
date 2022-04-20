<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PeopleStoreRequest extends FormRequest
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
            'titles' => 'nullable',
            'firstname' => 'required',
            'firstnames'=>'nullable',
            'lastname'=>'required',
            'lastnames'=>'nullable',
            'address' =>'required', 
            'age' => 'required',
            'ages'=>'nullable',
            'religion' => 'required',
            'ethnic' => 'required',
            'nic' =>'required',
            'nics'=>'nullable',
            'gender'=>'required',
            'genders'=>'nullable',
            'village_id' =>'required',
        ];
    }
}
