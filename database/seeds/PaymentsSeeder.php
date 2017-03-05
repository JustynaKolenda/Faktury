<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = new \App\Payment();
        $payment->payment;
        $payment->save();

    }
}
