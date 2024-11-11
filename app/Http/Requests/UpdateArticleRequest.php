<?php

namespace App\Http\Requests;

use App\Models\Article;
use App\Models\Media;
use App\Models\SubCategory;
use App\Models\User;
use App\Traits\FormatsValidationErrors;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateArticleRequest extends FormRequest
{
    use FormatsValidationErrors;

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
        $id = $this->route('id');

        return [
            'author_id' => [
                'required',
                Rule::exists(User::class, 'id')
            ],
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique(Article::class)->ignore($id)
            ],
            'img' => [
                'nullable',
                'image',
                'max:5120'
            ],
            'description' => [
                'nullable',
                'string',
                'max:255'
            ],
            'content' => [
                'required',
                'string'
            ],
            'is_trending' => [
                'nullable',
                Rule::in([0, 1])
            ],
            'type' => [
                'required',
                'string',
                'max:100',
                Rule::in([
                    \App\Models\Article::TYPE_NORMAL,
                    \App\Models\Article::TYPE_FEATURE
                ])
            ],
            'sub_categories' => [
                'required',
                'array',
                'min:1'
            ],
            'sub_categories.*' => [
                'required',
                'numeric',
                Rule::exists(SubCategory::class, 'id')
            ],
            'tags' => [
                'nullable',
                'array',
            ],
            'tags.*' => [
                'required',
                'string',
                'regex:/^[\p{L}\s0-9]*$/u',
            ],
            'media' => [
                'nullable',
                'array'
            ],
            'media.file_path' => [
                'nullable',
                'required_with:media.type',
                'string',
                'max:255',
            ],
            'media.type' => [
                'nullable',
                'required_with:media.file_path',
                Rule::in([Media::TYPE_LIVE, Media::TYPE_VIDEO])
            ],
            'audio' => [
                'nullable',
                'array'
            ],
            'audio.title' => [
                'nullable',
                'required_with:audio.file_path',
                'string',
                'max:50',
            ],
            'audio.file_path' => [
                'nullable',
                'required_with:audio.title',
                'file',
                'mimes:application/octet-stream,audio/mpeg,mp3,wav',
                'max:5120'
            ],
        ];
    }

    public function attributes()
    {
        return [
            'media.file_path' => 'file path',
            'media.type' => 'type',
            'audio.title' => 'title',
            'audio.file_path' => 'file path',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = [
            'message' => 'An error occurred, please check again !',
            'errors' => $this->formatErrors($validator->errors()->toArray())
        ];

        throw new HttpResponseException(response()->json($response, 422));

    }
}
