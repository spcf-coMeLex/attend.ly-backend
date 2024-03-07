<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            'firstName' => 'required|string',
            'middleName' => 'nullable|string',
            'lastName' => 'required|string',
            'gender' => 'required|in:MALE,FEMALE,OTHER',
            'birthDate' => 'required|date',
            'parentsEmail' => 'nullable|email',
            'sectionCode' => 'required|string',
            'address' => 'required|string',
            'programCode' => 'required|string',
            'departmentCode' => 'required|string',
            'branchName' => 'required|string',
        ];
    }
}
