<?php

use Illuminate\Database\Seeder;

class ProdutoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produto_categoria')
            ->insert([
                'id' => 1,
                'nome' => 'Classic'
            ]);
    }
}
