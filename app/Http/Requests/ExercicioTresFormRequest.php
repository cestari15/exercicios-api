<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ExercicioTresFormRequest extends FormRequest
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
            'n3' => 'required|numeric',
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'error' => $validator->errors()
            ])
            );
    }

    public function messages(){
        return [
            'n1.required' => 'preencha o campo n1',
            'n1.numeric' => 'coloque um numero no espaço n1',
            'n2.required' => 'preencha o campo n2',
            'n2.numeric' => 'coloque um numero no espaço n2',
            'n3.required' => 'preencha o campo n3',
            'n3.numeric' => 'coloque um numero no espaço n3',
        ];
    }

}
