<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ListaDeTarefas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ListaDeTarefas')->insert([
           'text' => 'Comprar passagens aéreas.',
            'autor'=> 'John doe',
            'status' => 'Concluido',
            'created_at' => date('Y-m-d h:i:s')
        ]);

        DB::table('ListaDeTarefas')->insert([
            'text' => 'Reservar Hotel.',
            'autor'=> 'John doe',
            'status' => 'Concluido',
            'created_at' => date('Y-m-d h:i:s')
        ]);

        DB::table('ListaDeTarefas')->insert([
            'text' => 'Preparar Slides para apresentação.',
            'autor'=> 'John doe',
            'status' => 'Pendente',
            'created_at' => date('Y-m-d h:i:s')
        ]);
    }
}
