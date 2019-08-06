<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'name' => 'required|max:30',
            'kana' => 'required|max:30',
            'tel' => 'required|max:14',
            'age' => 'required|numeric',
            'email' => [ 'required', 'max:255', 'email', 
                function($attribute, $value, $fail) {
                    if ($value !== $this->confirm_email) {
                        return $fail('メールアドレスとメールアドレス（確認用）が一致しません。');
                    }
                }
            ],
            'shops' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'shops' => '店舗',
        ];
    }

}
