<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class applianceUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'id' => 'integer|exists:appliances,id',
            'name' => 'required|string',
            'description' => 'required|string',
            'voltage' => 'required|integer',
            'brand_id' => 'integer|exists:brands,id',
        ];
    }

    public function messages(): array
    {
        return [
            'id.integer'           => 'O ID precisa ser um número inteiro',
            'id.exists'            => 'ID de eletrodoméstico inválido',
            'name.required'        => 'O campo nome é obrigatório',
            'name.string'          => 'O campo nome precisa ser um texto',
            'description.required' => 'O campo descrição é obrigatório',
            'description.string'   => 'O campo descrição precisa ser um texto',
            'voltage.required'     => 'O campo voltagem é obrigatório',
            'voltage.integer'      => 'O campo voltagem precisa ser um número inteiro',
            'brand_id.integer'     => 'O ID da marca precisa ser um número inteiro',
            'brand_id.exists'      => 'ID de marca inválido',
        ];
    }
}
