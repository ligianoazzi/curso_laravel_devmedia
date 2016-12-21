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
        // $this->call(UsersTableSeeder::class);
           $this->call(LivrosTableSeeder::class);
        // aqui vai o nome do arquivo seeder e não o nome da tabela
        // no arquivo seeder vai o nome da tabela
           
    }
}
