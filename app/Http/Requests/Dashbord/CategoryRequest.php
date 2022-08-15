<?php

namespace App\Http\Requests\Dashbord;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            "image"  => "nullable|max:1024|mimes:jpg,png,jpeg"

        ];

        foreach (config('translatable.locales') as $locale) {

            $rules["$locale"]               = "array";
            $rules["$locale.name"]          = "required|min:2|max:100|unique:category_translations,name," . @$this->category  . ",category_id";
        }

        return $rules;
    }
}
