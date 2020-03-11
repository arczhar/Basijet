<?php

namespace App\Http\Requests;

use App\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class ClientSendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'date' => [
                'required'
            ],
            'rmno' => [
                'required', 'min:7'
            ],

            'college' =>  ['required'
            ],
            'equipment' =>  ['required'
            ],
            'propertynumber' => [
                'required', 'propertynumber', Rule::unique((new Request)->getTable())->ignore($this->route()->requests->id ?? null)
            ],
            'quantity' => ['required'
            ],
            'service' => [
                'required'
            ]
            
        ];
    }
}
