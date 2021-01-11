<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'validate'){
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
            'age' => 'numeric|between:0,150|hello',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'名前は必ず入力してください。',
            'mail.email'=>'メールアドレスが必要です。',
            'age.numeric'=>'年齢を整数で記入ください。',
            'age.between'=>'年齢は0~150の間で入力ください',
            'age.hello'=>'Hello! 入力は偶数のみ受け付けます。',
        ];
    }
}