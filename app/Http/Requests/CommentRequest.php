<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
          'comment'=>'required',
          'name'=>'required|max:225',
          'email'=>'required|email|max:50',
          'comment'=>'required|min:5|max:5000',
         'post_id'=>'required|max:225',

        ];
    }
}
