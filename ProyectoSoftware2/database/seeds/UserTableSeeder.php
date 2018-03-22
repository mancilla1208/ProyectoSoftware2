<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'tipod' 		=> 'cc',
				'identificacion' => '007',
				'nombre' 	=> 'mateo',
        'telefonor' 	=> '0127',
				'telefonoc' 		=> '317',
        'direccionr' 	=> 'asturias',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindi',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'nanai',
        'email' 	=> 'mateo@h',
        'user' 	=> 'teopc',
				'password' 	=> \Hash::make('123'),
				'tipo' 		=> 'administrador',
				'active' 	=> 1,
				'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
      [
        'tipod' 		=> 'tarjeta',
        'identificacion' => '008',
        'nombre' 	=> 'mateo',
        'telefonor' 	=> '0127',
        'telefonoc' 		=> '317',
        'direccionr' 	=> 'asturias',
        'ciudad' 	=> 'armenia',
        'departamento' 	=> 'quindi',
        'pais' 	=> 'colombia',
        'profesion' 	=> 'nanai',
        'email' 	=> 'mateoaaa',
        'user' 	=> 'teopc1',
        'password' 	=> \Hash::make('123456'),
        'tipo' 		=> 'cliente',
        'active' 	=> 1,
        'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
      ],
		);

		User::insert($data);
    }
}
