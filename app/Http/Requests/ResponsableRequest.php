<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResponsableRequest extends FormRequest
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

            return ['name'=>'required','prenom'=>'required','email'=>'required','password'=>'required','pseudo'=>'required|unique:users'];
    }
    public function messages()
    {
        return ['pseudo.required'=>'Le pseudo est obligatoire !','name.unique'=>'Ce nom est déjà utilisé !','name.required'=>'Le nom est obligatoire !','prenom.required'=>'Le prénom est obligatoire !','email.required'=>'L\'email est obligatoire !','password.required'=>'Le mot de passe est oblgatoire'];
    }
}
