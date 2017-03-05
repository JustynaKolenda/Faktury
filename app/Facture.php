<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        'name' , 'name_of_service' , 'PKWiU' , 'unit' , 'quantity' , 'net_price',
        'discount' , 'net_value' , 'brutto_value' , 'advance' , 'date_issue' , 'date_payment' , 'edit' , 'delete',
        'user_id' , 'typefacture_id' , 'payment_id' , 'vat_rate_id' , 'firm_adress_id' , 'firm_sender_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type_facture()
    {
        return $this->belongsTo(TypeFacture::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function vat_rate()
    {
        return $this->belongsTo(VatRate::class);
    }

    public function firm_adress()
    {
        return $this->belongsTo(FirmAdress::class);
    }

    public function firm_sender()
    {
        return $this->belongsTo(FirmSender::class);
    }
}
