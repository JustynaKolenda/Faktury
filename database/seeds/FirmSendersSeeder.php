<?php

use Illuminate\Database\Seeder;
use App\FirmSender;

class FirmSendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firmsender = new \App\FirmSender();
        $firmsender->firmsender;
        $firmsender->save();

    }
}
