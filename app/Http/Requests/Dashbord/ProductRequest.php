<?php

namespace App\Http\Requests\Dashbord;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "image"  => "nullable|max:1024|mimes:jpg,png,jpeg",
            "size"   =>  "required|string",
            "category_id" => "required|exists:categories,id,deleted_at,NULL",
            "brand_id"  => "required|exists:brands,id,deleted_at,NULL"

        ];

        foreach (config('translatable.locales') as $locale) {

            $rules["$locale"]               = "array";
            $rules["$locale.name"]          = "required|min:2|max:100|unique:product_translations,name," . @$this->product  . ",product_id";
            $rules["$locale.description"]   = "nullable|string|max:100";
            $rules["$locale.price"]   = "required|numeric";
            $rules["$locale.colour"] =  "required|string";
            $rules["$locale.status"] =  "required|string";
            $rules["$locale.count"] =   "required|numeric" ;
            $rules["$locale.rate"] =   "nullable|numeric" ;




        }

        return $rules;
    }
}
