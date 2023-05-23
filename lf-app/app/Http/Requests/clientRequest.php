<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone' => 'required',
            'document' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
{
        return [
            'name.required' => 'Um nome é requirido.',
            'phone.required' => 'Um phone é requirido.',
            'document.required' => 'Um documento é requirido.',
            'address.required' => 'Um endereço é requirido.',
        ];
    }
}
