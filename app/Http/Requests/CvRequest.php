<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
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
            'description' =>'required',
            'image' => 'nullable',
        ];
    }
}

// 'document' => 'required|mimes:docx,doc,pdf|nullable',
// 'image' => 'required|mimes:png,jpg,jpeg|nullable',
