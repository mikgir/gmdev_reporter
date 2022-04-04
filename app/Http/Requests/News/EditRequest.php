<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'category_id' =>['required', 'integer', 'exists:news'],
            'title'=>['required', 'string'],
            'image'=>['nullable', 'string'],
            'author'=>['nullable', 'string'],
            'status'=>['required', 'string', 'min:5', 'max:7'],
            'description'=>['required', 'string']
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return parent::messages();
    }

    /**
     * @return array
     */
    public function attributes(): array
    {
        return parent::attributes();
    }
}