<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'content' => 'required|string',
            'reading_time' => 'nullable|integer|min:1|max:60',
            'type_id' => 'nullable|exists:types,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare 100 caratteri.',
            'reading_time.required' => 'Il tempo di lettura è obbligatorio.',
            'reading_time.integer' => 'Il tempo di lettura deve essere un numero intero.',
            'reading_time.min' => 'Il tempo di lettura deve essere almeno 1 minuto.',
            'reading_time.max' => 'Il tempo di lettura non può superare 60 minuti.',
            'text.required' => 'Il contenuto è obbligatorio.',
        ];
    }
}
