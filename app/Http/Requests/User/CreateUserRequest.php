<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'mail_address' => 'required|email|unique:users,mail_address',
            'address'=> 'required|max:255',
            'password' => 'min:6 | max:255',
            'password_confirmation' => 'required_with:password|same:password|min:6|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:15',
        ];
    }
    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute không được vượt quá 225 ký tự',
            'min' => ':attribute ít nhất 6 ký tự',
            'email.email' => 'Sai định dạng email',
            'email.unique' => 'Email đã tồn tại',
            "password_confirmation.same"=>  __('user.password_confirmation').' không đúng'
        ];
    }

    public function attributes() {
        return [
            'name' => __('user.name'),
            'mail_address' => __('user.email'),
            'password' => __('user.password'),
            'address' => __('user.address'),
            'password_confirmation' => __('user.password_confirmation'),
            'phone' => __('user.phone'),
        ];
    }
}
