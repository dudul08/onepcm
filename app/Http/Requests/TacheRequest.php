<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TacheRequest extends FormRequest
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
        return ['libelle'=>'required','nombre_points'=>'required|integer','nombre_points_bonus'=>'required|integer'];
    }
    public function messages()
    {
        return ['libelle.required'=>'Le libellé est obligatoire !','nombre_points.required'=>'Le nombre de point est obligatoire !','nombre_points_bonus.required'=>'Le nombre de point bonus est obligatoire !','nombre_points.integer'=>'Cette information est incorrecte !','nombre_points_bonus.integer'=>'Cette information est incorrecte !'];
    }
}
