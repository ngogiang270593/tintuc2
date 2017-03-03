<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtUserName'=>'unique:user,name',
            'txtPass' =>'min:6',
            'txtEmail'=>'unique:user,email',
            'txtRePass'=>'same:txtPass',
             'fImage'       => 'required|mimes:png,jpg,jpeg'
        ];
    }
   public function messages(){
        return [
            'txtUserName.unique'=>'Name Already Exists',
            'txtPass.min' =>'Password must be over 6 characters',
            'txtEmail.unique'=>'Email Already Exists',
            'txtRePass.same'=>'Incorrect Passwords',
            'fImage.required'=>'Image Empty',
            'fImage.mimes'=>'Image Empty',
            'fImage.mimes'=>'Image Error'
        ];
   }
}
