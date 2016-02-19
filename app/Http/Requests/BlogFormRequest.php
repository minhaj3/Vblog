<?php

namespace vblog\Http\Requests;

use vblog\Http\Requests\Request;

class BlogFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return $this->Auth::user();
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
            'title'=>'required',
            'excerpt'=>'required',
            'description'=>'required',
            // 'image'=>'required|image',
            'image'=>'image',
        ];
    }
}
