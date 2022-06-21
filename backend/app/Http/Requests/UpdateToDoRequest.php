<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateToDoRequest extends FormRequest
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
        // info($this['title']);
        return [
            'title'      => 'required|unique:to_dos,title,'.$this['id'],
            'date_time'   => 'required',
            'description'   => 'nullable',
            'status'    => 'required|in:Active,Inactive'
        ];
    }
}
