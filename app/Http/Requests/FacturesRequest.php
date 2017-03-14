<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturesRequest extends FormRequest
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
            'name_of_service' => 'required|max:255',
            'PKWiU' => 'required|max:255',
            'unit' => 'required|max:6',
            'quantity' => 'required|max:13',
            'net_price' => 'required|max:11',
            'discount' => 'required|max:255',
            'net_value' => 'required|max:16',
            'brutto_value' => 'required|max:32',
            'advance' => 'required|max:32',
            'date_issue' => 'required|max:32',
            'date_payment' => 'required|max:32',
            'user_id' => 'required|max:32',
            'typefacture_id' => 'required|max:32',
            'payment_id' => 'required|max:32',
            'vat_rate_id' => 'required|max:32',
            'firm_adress_id' => 'required|max:32',
            'firm_sender_id' => 'required|max:32',


        ];
    }
}
