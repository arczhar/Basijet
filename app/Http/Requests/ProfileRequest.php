<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
<<<<<<< Updated upstream
            'name' => ['required', 'min:3'],
=======
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
>>>>>>> Stashed changes
            'email' => ['required', 'email', Rule::unique((new User)->getTable())->ignore(auth()->id())],
        ];
    }
}
