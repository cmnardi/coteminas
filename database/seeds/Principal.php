<?php

use Illuminate\Database\Seeder;

class Principal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call([
            ProdutoSeeder::class
        ]);
    }
}
