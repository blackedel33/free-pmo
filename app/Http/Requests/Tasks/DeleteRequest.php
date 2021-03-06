<?php

namespace App\Http\Requests\Tasks;

use App\Http\Requests\Request;

class DeleteRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('manage_agency');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'task_id' => 'required',
            'job_id'  => 'required',
        ];
    }

}
