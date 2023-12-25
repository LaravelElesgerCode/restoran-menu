<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class foodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>'required',
            'foodname'=>'required|min:3|max:25',
            'price'=>'required|numeric|min:1|max:15',
        ];
    }


    public function messages(): array
    {
        return [
            'category_id.required'=>'Kategoriya daxil edilməyib!',

            'foodname.required'=>'Yemək adı daxil edilməyib!',
            'foodname.min'=>'Yemək adı minimum 3 simvol olmalıdır!',
            'foodname.max'=>'Yemək adı maksimum 25 simvol olmalıdır!',

            'price.required'=>'Qiymət daxil edilməyib!',
            'price.numeric'=>'Qiymət/ Yalnız rəqəm daxil edə bilərsiniz(1,2,3...)!',
            'price.min'=>'Qiymət minimum 1 simvol olmalıdır!',
            'price.max'=>'Qiymət maksimum 15 simvol olmalıdır!',
        ];
    }
}
