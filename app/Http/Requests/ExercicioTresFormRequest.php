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
            'n1' => 'require|numeric',
            'n2' => 'require|numeric',
            'n3' => 'require|numeric',
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
            'n1' => 'preencha o campo n1',
            'n1' => 'coloque um numero no espaço n1',
            'n2' => 'preencha o campo n2',
            'n2' => 'coloque um numero no espaço n2',
            'n3' => 'preencha o campo n3',
            'n3' => 'coloque um numero no espaço n3',
        ];
    }

}
