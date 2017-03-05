<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirmAdressesRequest extends FormRequest
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
            'name' => 'required|max:255',
            'adress' => 'required|max:255',
            'pleace' => 'required|max:255',
            'postalcode' => 'required|max:6',
            'nip' => 'required|max:13',
            'pesel' => 'required|max:11',
            'email' => 'required|max:255',
            'phone' => 'required|max:16',
            'account_number' => 'required|max:32',

        ];
    }
}
