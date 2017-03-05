<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(TypeFacturesSeeder::class);
         $this->call(PaymentsSeeder::class);
         $this->call(FirmAdressesSeeder::class);
         $this->call(FirmSendersSeeder::class);



    }
}
