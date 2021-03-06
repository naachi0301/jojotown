<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'product_name' => 'required',
            'product_explain' => 'required|max:60',
            'price' => 'numeric|gt:0',
            'url' => 'url|active_url',
            'image_url' => 'url|active_url',
            // 'trend_start' => 'required',
            // 'trend_end' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'product_name.required' => '商品名は必ず入力してください。',
            'product_explain.required' => '商品説明は必ず入力してください。',
            'product_explain.max' => '60文字以内で入力してください。',
            'price.numeric' => '値は整数で入力してください。',
            'price.gt' => '値段は０以上で入力してください。',
            'url.url' => '正しいURLの形式で入力してください。',
            'url.active_url' => '有効なURLではありません。',
            'image_url.url' => '正しいURLの形式で入力してください',
            'image_url.active_url' => '有効なURLではありません',
            // 'trend_start.required' => '開始日は必ず入力してください',
            // 'trend_end.required' => '終了日は必ず入力してください'
        ];
    }
}
