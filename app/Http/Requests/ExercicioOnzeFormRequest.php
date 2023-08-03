<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioOnzeFormRequest extends FormRequest
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
            'n1' => 'required|numeric',
            'n2' => 'required|numeric',
            'operacao' => 'required|string',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([

                'success' => false,
                'error' => $validator->errors()
            ])
        );
    }

    public function messages(){
        return [
            'n1.required' => 'Preencha o campo',
            'n1.numeric' => 'Preencha o campo com um numero',
            'n2.required' => 'Preencha o campo',
            'n2.numeric' => 'Preencha o campo com um numero',
            'operacao.required' => 'Preencha o campo',
            'operacao.string' => 'Preencha o campo com as letras A S M D',
        ];
    }
}
