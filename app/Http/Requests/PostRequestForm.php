<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestForm extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titre'=>'required|string|min:2|max:60',
            'description'=>'required|string|min:5',
            'image'=>'image|max:1024',
       ];
    }

    public function messages()
    {
        return[
            'titre.required'=>'Le titre est requis',
            'titre.min'=>'Le titre est un minimum de 2 caractères',
            'titre.max'=>'Le titre est un maximum de 60 caractères',
            'description.required'=>'La description est requise',
            'description.min'=>'La description est un minimum de 5 caractères',
            'image.image'=>'Ce champ reçoit une image',
            'image.max'=>'L\'image ne doit pas dépasssé 1024 Mo',
        ];
    }
}