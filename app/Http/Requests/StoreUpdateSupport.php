<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSupport extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
      
    return [
        'nome' => 'required|string|max:255', 
        'email' => 'required|email|unique:agendamentos,email', 
        'telefone' => 'required|string|max:15',
        'data' => 'required|date', 
        'hora' => 'required|date_format:H:i',
        'id_service' => 'required|exists:services,id',
        'especie' => 'required|string|max:100',
    ];
}

}
