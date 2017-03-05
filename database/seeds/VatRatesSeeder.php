<?php

use Illuminate\Database\Seeder;
use App\VatRate;

class VatRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vat = new \App\VatRate() ;
        $vat->rate;
        $vat->save();
    }
}
