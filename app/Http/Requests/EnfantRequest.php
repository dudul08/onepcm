<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnfantRequest extends FormRequest
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
        return ['nom'=>'required','prenom'=>'required','date_naissance'=>'required', 'genre' => 'required|integer'];
    }
    public function messages()
    {
        return ['nom.required'=>'Le nom est obligatoire !','prenom.required'=>'Le prénom est obligatoire !','date_naissance.required'=>'La date de naissance est obligatoire !','genre.integer'=>'Cette information est incorrecte !','genre.required'=>'Cette information est obligatoire !'];
    }
}
