<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            // 'family_id' => 'required|exists:families,id',
            // 'lieu_id' => 'required|exists:lieus,id',
            // 'contrat_id' => 'required|exists:contrats,id',
            'description' => 'required',
            'mini_description' => 'required',
            'numero' => 'unique:jobs,numero,id',
        ];
    }
}
