<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'nombre' => 'Super heroes',
				'direccion' => 'super-heroes',
				'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
				'color' => '#440022'
			],
			[
				'nombre' => 'Geek',
				'direccion' => 'geek',
				'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!',
				'color' => '#445500'
			]
		);

		Category::insert($data);

	}
}
