<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'zip' => 'required|max:7',
            'address' => 'required|max:255',
            'description' => 'max:255',
            'email' => 'max:255',
            'business_hours_weekdays' => 'regex:/^\d{1,2}:\d{2}-\d{1,2}:\d{2}$/',
            'business_hours_weekend_and_holiday' => 'regex:/^\d{1,2}:\d{2}-\d{1,2}:\d{2}$/',
            'about_business_hours' => 'max:255',
            'about_regular_holiday' => 'max:255',
            'images' => 'max:1000|mimes:jpeg,png|image',
            'priority_of_display' => 'numeric|max:30000|min:0',
        ];
    }
}
