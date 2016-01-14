<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DomainRequest extends Request
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
            'domain' => 'required|min:3',
            'charge' => 'numeric',
            'renewal_date' => 'required|date',
            'duration' => 'required|numeric',
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
        ];
    }
}
