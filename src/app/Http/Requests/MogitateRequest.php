<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MogitateRequest extends FormRequest
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
            'name' => ['required'],
            'price' => ['required','numeric','max:10000'],
            'season' => ['required'],
            'description' => ['required','max:120'],
            'image' => ['required','mimes:png,jpeg']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名に入力してください',
            'price.required' => '値段を入力してください',
            'price.numeric' => '数値で入力してください',
            'price.max' => '0~10000円以内で入力してください',
            'season.required' => '季節を選択してください',
            'description.required' => '商品説明を入力してください',
            'description.max' => '120文字以内で入力してください',
            'image.required' => '商品画像を登録してください',
            'image.mimes' => '「.png」または「.jpeg」形式でアップロードしてください'
        ];
    }
}
