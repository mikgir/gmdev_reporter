<?php

namespace App\Http\Requests\Source;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    #[ArrayShape(['category_id' => "string[]", 'title' => "string[]",
        'link' => "string[]", 'description' => "string[]",
        'status' => "string[]"])]
    public function rules(): array
    {
        return [
            'category_id' =>['required', 'integer', 'exists:sources'],
            'title'=>['required', 'string'],
            'link'=>['required', 'string'],
            'description'=>['required', 'string'],
            'status'=>['required', 'string', 'min:5', 'max:7'],
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
