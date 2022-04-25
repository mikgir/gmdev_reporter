<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class CreateRequest extends FormRequest
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

    #[ArrayShape(['category_id' => "string[]", 'source_id' => "string[]",
        'title' => "string[]", 'image' => "string[]", 'description' => "string[]",
        'link' => "string[]", 'guid' => "string[]", 'pubDate' => "string[]"])]
    public function rules(): array
    {
        return [
            'category_id'=>['required', 'integer'],
            'source_id' =>['required', 'integer', 'exists:news'],
            'title'=>['required', 'string'],
            'image'=>['nullable', 'image:jpg.jpeg,png,gif'],
            'description'=>['nullable', 'string'],
            'link'=>['nullable', 'string'],
            'guid'=>['nullable', 'string'],
            'pubDate'=>['nullable', 'string']
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
