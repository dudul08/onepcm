<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnfantRequestUpdate extends EnfantRequest
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
        $data = parent::rules();
        unset($data['password']);
        return $data;
    }
}
