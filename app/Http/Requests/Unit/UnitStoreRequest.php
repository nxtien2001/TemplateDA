<?php

namespace App\Http\Requests\Unit;

use Illuminate\Foundation\Http\FormRequest;

class UnitStoreRequest extends FormRequest
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
            'name' => 'required|unique:units|max:50',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống trường này!',
            'name.max' => 'Đơn vị không được quá 50 kí tự',
            'name.unique' => 'Đơn vị đã tồn tại'
        ];
    }
}
