<?php

namespace App\Http\Requests;

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

    protected function prepareForValidation()
    {
        $year_month_day = $this->input('old_year') . '-' . $this->input('old_month') . '-' . $this->input('old_day');
        $this->merge([
           'year_month_day' => $year_month_day
        ]);
    }

    public function rules()
    {
        return [
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'under_name_kana' => 'required|string|max:30|regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u',
            'mail_address' => 'required|email|unique:users,mail_address|max:100',
            'sex' => 'required|in: 1,2,3',
            //年月日はまとめて生年月日とする
            'old_year','old_month','old_day' => 'required',
            'year_month_day' => 'date|before:now',
            'role' => 'required|in: 1,2,3,4',
            'password' => 'required|min:8|max:30|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'over_name.required' => '苗字を入力してください。',
            'over_name.string' => '苗字を文字列で入力してください。',
            'over_name.max' => '苗字は10文字以内で入力してください。',
            'under_name.required' => '名前を入力してください。',
            'under_name.string' => '名前を文字列で入力してください。',
            'under_name.max' => '名前は10文字以内で入力してください。',
            'over_name_kana.required' => '苗字カタカナを入力してください。',
            'over_name_kana.string' => '苗字カタカナを文字列で入力してください。',
            'over_name_kana.max' => '苗字カタカナは30文字以内で入力してください。',
            'over_name_kana.regex' => '苗字をカタカナで入力してください。',
            'under_name_kana.required' => '名前カタカナを入力してください。',
            'under_name_kana.string' => '名前カタカナを文字列で入力してください。',
            'under_name_kana.max' => '名前カタカナは30文字以内で入力してください。',
            'under_name_kana.regex' => '名前をカタカナで入力してください。',
            'mail_address.required' => 'メールアドレスを入力してください。',
            'mail_address.email' => 'メールアドレスの形式で入力してください。',
            'mail_address.unique' => 'すでに登録のあるメールアドレスです。',
            'mail_address.max' => 'メールアドレスは100文字以内で入力してください。',
            'sex.required' => '性別を入力してください。',
            'sex.in: 1,2,3' => '男性、女性、その他の中からお選びください',
            'old_year.required','old_month.required','old_day.required' => '生年月日を入力してください。',
            'year_month_day.date' => '正しい生年月日を入力してください。',
            'role.required' => '役職を入力してください。',
            'role.in: 1,2,3,4' => '講師(国語)、講師(数学)、教師(英語)、生徒の中からお選びください',
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードを8文字以上で入力してください。',
            'password.max' => 'パスワードを30文字以内で入力してください。',
            'password.confirmed' => '確認用パスワードと一致しておりません。',
        ];
    }
}
