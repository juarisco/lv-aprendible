<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('create-projects');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // dd($this->route('project'));
        return [
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore($this->route('project')),
            ],
            'category_id' => [
                'required',
                'exists:categories,id'
            ],
            'image' => [
                $this->route('project') ? 'nullable' : 'required',
                'mimes:jpeg,png'
            ],
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('Enter a project title'),
        ];
    }
}
