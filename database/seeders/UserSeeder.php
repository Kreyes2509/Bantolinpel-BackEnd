<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'nombres'=>'Kenneth Efrem',
            'apellidos'=> 'Reyes Rubio',
            'nombreUsuario'=> 'Kreyes25',
            'fechaCumpleaños'=> '2002-09-25',
            'email'=> 'kreyes.dev@gmail.com',
            'password'=>bcrypt('12345678'),
            'rolId'=>1,
        ]);

         $user2 = User::create([
            'nombres'=>'Valeria Alejandra',
            'apellidos'=> 'Diaz Guerrera',
            'nombreUsuario'=> 'ValeGuapa',
            'fechaCumpleaños'=> '2002-03-18',
            'email'=> 'valeriadg1803@gmail.com',
            'password'=>bcrypt('12345678'),
            'rolId'=>1,
         ]);


         $user3 = User::create([
            'nombres'=>'Alan David',
            'apellidos'=> 'Enriquez Barrientos',
            'nombreUsuario'=> 'Alan',
            'fechaCumpleaños'=> '2002-11-14',
            'email'=> 'enriquezalan52@gmail.com',
            'password'=>bcrypt('12345678'),
            'rolId'=>2,
         ]);

         $user4 = User::create([
            'nombres'=>'Brenda Azucena',
            'apellidos'=> 'Medina Alvarez',
            'nombreUsuario'=> 'Brendukis',
            'fechaCumpleaños'=> '2002-02-18',
            'email'=> 'brendamedina8803@gmail.com',
            'password'=>bcrypt('12345678'),
            'rolId'=>3,
         ]);

    }
}
