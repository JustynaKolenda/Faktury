<?php

use Illuminate\Database\Seeder;
use App\Facture;

class FacturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facture = new \App\Facture();
        $facture->facture;
        $facture->save();
    }
}
