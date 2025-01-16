<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'userId' => ['required', 'integer'],
            'nameCompany' => ['required', 'string'],
            'nit' => ['required', 'string'],
            'numberEmployees' => ['required', 'integer'],
            'address' => ['required', 'string'],
            'cellphone' => ['required', 'integer'],
            'whatsapp' => ['required', 'integer'],
            'legalRepresentative' => ['required', 'string'],
            'webSite' => ['required', 'string'],
            'typology_foreigner' => ['required', 'integer'],
            'companyDescription' => ['required', 'string'],
            'contactEmail' => ['required', 'string'],
            'typePerson_foreigner' => ['required', 'integer'],
            'sector_foreigner' => ['required', 'integer'],
            'department_foreigner' => ['required', 'integer'],
            'percent' => ['required', 'integer']
        ];
    }
}
