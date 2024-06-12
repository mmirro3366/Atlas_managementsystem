<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryFormRequest extends FormRequest
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
            'main_category_id' => 'required|exists:main_categories,id',
            'sub_category_name' => 'required|string|max:100|unique:main_categories,main_category',
        ];
    }

    public function messages()
    {
        return [
            'main_category_name.required' => 'メインカテゴリーを入力してください。',
            'main_category_name.exists' => '登録されているメインカテゴリーを入力してください。',
            'sub_category_name.required' => 'サブカテゴリーを入力してください。',
            'sub_category_name.string' => 'サブカテゴリーを文字列で入力してください。',
            'sub_category_name.max' => 'サブカテゴリーを100文字以内で入力してください。',
            'sub_category_name.unique' => 'すでに登録のあるサブカテゴリーです。',
        ];
    }
}
