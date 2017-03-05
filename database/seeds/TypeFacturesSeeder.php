<?php

use Illuminate\Database\Seeder;
use App\TypeFacture;

class TypeFacturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $typefacture = new \App\TypeFacture();
            $typefacture->type;
            $typefacture->save();
    }
}
