<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->truncate();

        DB::table('clientes')->insert([
            'nombre' => 'gasfer',
            'apellido' => 'fer ferrufino',
            'direccion' => 'av. panamericana',
            'fecha_nacimiento' => '1989-07-01',
            'telefono' => '63909240',
            'email' => 'gasfer@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'jorge',
            'apellido' => 'jimenez jimenes',
            'direccion' => 'c. esteban arce',
            'fecha_nacimiento' => '1985-08-12',
            'telefono' => '63258457',
            'email' => 'jjjmenez@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'juan ',
            'apellido' => 'perez perez',
            'direccion' => 'C. juan capriles # 6556',
            'fecha_nacimiento' => '1986-02-10',
            'telefono' => '63548978',
            'email' => 'giuseppelinarez770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'juan jose ',
            'apellido' => 'perez perez',
            'direccion' => 'C. juan capriles # 6556',
            'fecha_nacimiento' => '1986-02-10',
            'telefono' => '63548978',
            'email' => 'giuseppelinarez770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'juan armin',
            'apellido' => 'perez perez',
            'direccion' => 'C. juan capriles # 6556',
            'fecha_nacimiento' => '1986-02-10',
            'telefono' => '63548978',
            'email' => 'giuseppelinarez770@gmail.com'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'juan juanjo ',
            'apellido' => 'perez perez',
            'direccion' => 'C. juan capriles # 6556',
            'fecha_nacimiento' => '1986-02-10',
            'telefono' => '63548978',
            'email' => 'giuseppelinarez770@gmail.com'
        ]);
        
    }
}
