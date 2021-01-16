<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'data/add' || $this->path() == 'data/edit'){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
    }

    public function messages(){
        return [
            'name.required'=>__('messages.name_required'),
            'mail.email'=>__('messages.valid_email'),
            'age.numeric'=>__('messages.age_must_be_number'),
            'age.between'=>__('messages.age_must_between'),
        ];
    }
}
