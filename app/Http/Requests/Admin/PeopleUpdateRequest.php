<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PeopleUpdateRequest extends FormRequest
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
    { $people = $this->people;
        return [
            'title' =>'required',
            'firstname' => 'required',
            'lastname'=>'required',
            'address' =>'required', 
            'age' => 'required',
            'religion' => 'required',
            'ethnic' => 'required',
            'nic' =>'required',
            'village_id' =>'required',
            
            
        ];
    }
}
