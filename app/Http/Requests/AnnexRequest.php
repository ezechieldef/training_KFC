<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnexRequest extends FormRequest
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
            'entreprise_id' => 'required|exists:entreprises,id',
            'manager_id' => 'required|exists:managers,id',
            'nom' => 'required|string',
            'ville' => 'string',
        ];
    }
}
