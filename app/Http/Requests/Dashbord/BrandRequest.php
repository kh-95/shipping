<?php

namespace App\Http\Requests\Dashbord;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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

        $rules = [
            'type' => 'required|in:featured,top',

        ];

        foreach (config('translatable.locales') as $locale) {

            $rules["$locale"]               = "array";
            $rules["$locale.name"]          = "required|min:2|max:100|unique:brand_translations,name," . @$this->brand  . ",brand_id";
        }

        return $rules;
    }
}
