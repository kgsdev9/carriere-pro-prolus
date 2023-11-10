<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LetterMotivationRequest extends FormRequest
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
            // 'image' => 'required|mimes:docx,doc,pdf',
            'title' => 'required|string|max:50',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required'
        ];
    }
}
