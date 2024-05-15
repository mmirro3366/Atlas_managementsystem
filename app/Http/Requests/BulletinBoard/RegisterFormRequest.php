<?php

namespace App\Http\Requests\BulletinBoard;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|max:30|/\A[ァ-ヴー]+\z/u',
            'under_name_kana' => 'required|string|max:30|/\A[ァ-ヴー]+\z/u',
            'mail_address' => 'required|string|max:10',
            'sex' => 'required|string|max:10',
            'old_year','old_month','old_day' => 'required|string|max:10',
            'role' => 'required|string|max:10',
            'password' => 'required|string|max:10',
        ];
    }

    public function messages()
    {
        return [
            'over_name.required' => '苗字を入力してください。',
            'over_name.string' => '文字列で入力してください。',
            'over_name.max' => '苗字は10文字以内で入力してください。',
            'under_name.required' => '名前を入力してください。',
            'under_name.string' => '文字列で入力してください。',
            'under_name.max' => '名前は10文字以内で入力してください。',
        ];
    }
}
