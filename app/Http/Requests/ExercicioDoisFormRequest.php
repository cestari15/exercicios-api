<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioDoisFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'primeira_entrada' => 'require|numeric',
            'segunda_entrada' => 'require|numeric',
        ];
    }

    public function failedValidator(Validator $validator){
       throw new HttpResponseException(
        response()->json([
            'succes' => false,
            'error' => $validator->errors()
            ])
        );
       
    }

    public function messages(){
        return [
            'primeira_entrada.require' => 'Preencha o campo',
            'primera_entrada.numeric' => 'Preencha o campo com um numero',
            'segunda_entrada.require' => 'Preencha o campo',
            'segunda_entrada.numeric' => 'Preencha o campo com um numero',
        ];
    }
}
