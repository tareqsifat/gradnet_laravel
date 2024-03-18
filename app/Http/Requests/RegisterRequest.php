<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'city' => ['nullable','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => ['required',  'file', 'mimes:jpeg,png,jpg', 'max:2048'],
            'member_type' => ['required', 'string', 'max:255'],
            'ssc_roll' => ['nullable', 'string', 'max:255'],
            'ssc_board' => ['nullable', 'string', 'max:255'],
            'ssc_reg' => ['nullable', 'string', 'max:255'],
            'passing_year' => ['nullable', 'string', 'max:255'],
            'ssc_document' => ['nullable', 'file', 'mimes:jpeg,png,jpg,pdf', 'max:2048'], // Allow JPEG, PNG, JPG, PDF
            'nid_no' => ['nullable','string', 'max:255'],
            'nid_scaned' => ['nullable', 'file', 'mimes:jpeg,png,jpg,pdf', 'max:2048'], // Allow JPEG, PNG, JPG, PDF
            'emergency_contact' => ['nullable','string', 'max:255'],
            'permanent_address' => ['nullable','string', 'max:255'],
            'brn_number' => ['nullable','string', 'max:255'],
            'birth_day' => ['nullable','date', 'max:255'],
            'blood_group' => ['nullable', 'string', 'max:255'],
        ];
    }
}
