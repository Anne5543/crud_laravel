<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAgendamentos extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:40',
            'email' => 'required|email|max:50',
            'telefone' => 'required|string|max:15',
            'data' => 'required|date',
            'hora' => 'required',
            'servico' => 'required|exists:servicos,id',
            'especie' => 'required|string|max:20',
        ];
    }
}
