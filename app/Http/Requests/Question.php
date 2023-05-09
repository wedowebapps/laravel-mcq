<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class Question extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'questionname'  => 'required',
            'question_type' => 'required',
            'choice_1'      => 'required',
            'choice_2'      => 'required',
            'choice_3'      => 'required',
            'choice_4'      => 'required',
            'answer'        => 'required',
        ];
    }
}
