<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

# NOTE: Class to handle validate for request
class CheckProductsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // NOTE: fix error: Forbidden
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
            'name'       => 'required|min:6',
            'pro_code'   => 'required|max:4',
            'created_at' => 'required|date',
        ];
    }
}
