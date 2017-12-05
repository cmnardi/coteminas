<?php

use Illuminate\Database\Seeder;

class ProdutoPrecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ProdutoPreco::class, 500)->create()->each(function ($p) {
            $p->save();
        });
    }
}
