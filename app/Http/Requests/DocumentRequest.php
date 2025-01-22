<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'file' => ['required', 'file', 'mimes:pdf,doc,docx,csv'],
            'documentName' =>['required','string','max:255'],
            'urlDocument' => ['required', 'string'],
            'urlVideo' => ['required', 'string'],
            'documentDescription' => ['required', 'string','max:1000'],
            'idModule' => ['required', 'integer', 'exists:modules,id'] 
        ];
    }
}
