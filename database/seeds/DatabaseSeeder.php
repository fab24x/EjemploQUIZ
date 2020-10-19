<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Preguntas::truncate();//vacia la tabla de Preguntas
        DB::unprepared(file_get_contents('database/Preguntas_soloInserts.sql'));
    }
}
