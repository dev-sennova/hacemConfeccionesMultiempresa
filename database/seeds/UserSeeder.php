<?php

use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paula',
            'email' => 'pacolmenares02@misena.edu.co',
            'password' => bcrypt('Paula'),
        ]);

        DB::table('users')->insert([
            'name' => 'Freddy',
            'email' => 'freddy.mendez@misena.edu.co',
            'password' => bcrypt('Instructor'),
        ]);

        DB::table('users')->insert([
            'name' => 'Luis',
            'email' => 'ljgarcia899@misena.edu.co',
            'password' => bcrypt('Luis'),
        ]);

        DB::table('users')->insert([
            'name' => 'Luz',
            'email' => 'luzariasarias@misena.edu.co',
            'password' => bcrypt('Instructora'),
        ]);

        DB::table('users')->insert([
            'name' => 'George Olago',
            'email' => 'golago@sena.edu.co',
            'password' => bcrypt('golago@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ricardo Colmenares',
            'email' => 'rcolmenares@sena.edu.co',
            'password' => bcrypt('rcolmenares@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Domingo Neira',
            'email' => 'dneira@sena.edu.co',
            'password' => bcrypt('dneira@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Alejandra Arias',
            'email' => 'aariasd@sena.edu.co',
            'password' => bcrypt('aariasd@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Sandra Milena Reyes',
            'email' => 'smreyesi@sena.edu.co',
            'password' => bcrypt('smreyesi@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Blanca Yanneth Murallas',
            'email' => 'bmuralas@sena.edu.co',
            'password' => bcrypt('bmuralas@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Yazmin Alicia Jaimes',
            'email' => 'yjaimesf@sena.edu.co',
            'password' => bcrypt('yjaimesf@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Fisher Yarely Torres',
            'email' => 'fyrodrguez@sena.edu.co',
            'password' => bcrypt('fyrodrguez@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Andrea Tatiana Ferreira',
            'email' => 'atferreira@sena.edu.co',
            'password' => bcrypt('atferreira@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Astrid Mariela Hernandez',
            'email' => 'ahernandez@sena.edu.co',
            'password' => bcrypt('ahernandez@sena.edu.co'),
        ]);

        DB::table('users')->insert([
            'name' => 'Claudia Castellanos',
            'email' => 'ccastellanosr@sena.edu.co',
            'password' => bcrypt('ccastellanosr@sena.edu.co'),
        ]);

    }
}
