<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'race' => 'required|string',
            'relapses' => 'required|string',
            'doctor_id' => 'required|integer',
        ];
    }
}