<?php

use Illuminate\Database\Seeder;
use App\FirmAdress;

class FirmAdressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firmadress = new \App\FirmAdress();
        $firmadress->firmadress;
        $firmadress->save();

    }
}
