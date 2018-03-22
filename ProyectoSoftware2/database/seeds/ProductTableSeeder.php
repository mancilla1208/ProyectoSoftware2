<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'nombre' 			=> 'galaxy s8',
				'direccion' 			=> 'galaxy-s8',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo',
				'material' 			=> 'roca',
				'dimensiones' 			=> 'grande',
				'color' 			=> 'azul',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 275.00,
				'imagen' 		=> 'https://drop.ndtv.com/TECH/product_database/images/329201783846PM_635_samsung_galaxy_s8.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'nombre' 			=> 'motoZ',
				'direccion' 			=> 'moto-z',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo',
				'material' 			=> 'roca',
				'dimensiones' 			=> 'grande',
				'color' 			=> 'azul',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 255.00,
				'imagen' 		=> 'https://static.digit.in/product/c18a08ec8a2feeea6a7edfc01fbcf154e9b29249.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'nombre' 			=> 'iphoneX',
				'direccion' 			=> 'iphone-x',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo',
				'material' 			=> 'roca',
				'dimensiones' 			=> 'grande',
				'color' 			=> 'azul',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 300.00,
				'imagen' 		=> 'https://store.storeimages.cdn-apple.com/4662/as-images.apple.com/is/image/AppleInc/aos/published/images/i/ph/iphone/x/iphone-x-silver-select-2017?wid=305&hei=358&fmt=jpeg&qlt=95&op_usm=0.5,0.5&.v=1515602510472',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'nombre' 			=> 'Huawei p10',
				'direccion' 			=> 'huawei-p10',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo',
				'material' 			=> 'roca',
				'dimensiones' 			=> 'grande',
				'color' 			=> 'azul',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 475.00,
				'imagen' 		=> 'https://http2.mlstatic.com/celular-huawei-p10-lite-D_NQ_NP_620775-MCO25566596032_052017-F.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'nombre' 			=> 'lenovo Z1',
				'direccion' 			=> 'lenovo-Z1',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo1',
				'material' 			=> 'roca1',
				'dimensiones' 			=> '1grande',
				'color' 			=> 'azul1',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 280.00,
				'imagen' 		=> 'http://www.reviewcentralme.com/wp-content/uploads/2016/03/Lenovo-Zuk-Z1-1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'nombre' 			=> 'xiaomi redmi',
				'direccion' 			=> 'xiaomi-redmi',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo1',
				'material' 			=> 'roca1',
				'dimensiones' 			=> '1grande',
				'color' 			=> 'azu1l',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 275.00,
				'imagen' 		=> 'https://gloimg.gbtcdn.com/gb/pdm-product-pic/Electronic/2017/10/17/goods-img/1508205551134031298.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'nombre' 			=> 'lumia 950',
				'direccion' 			=> 'lumia-950',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo2',
				'material' 			=> 'roca2',
				'dimensiones' 			=> '2grande',
				'color' 			=> 'azul2',
				'peso' 		=> 275.00,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 275.00,
				'imagen' 		=> 'http://winphonemetro.com/files/2015/10/Lumia-950-oficial.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'nombre' 			=> 'nokia 7',
				'direccion' 			=> 'nokia-7',
				'cantidad'  => 3,
				'tipo' 			=> 'tipejo3',
				'material' 			=> 'roca3',
				'dimensiones' 			=> '3grande',
				'color' 			=> 'az2ul',
				'peso' 		=> 275.003,
				'descripcion' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extracto' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'precio' 		=> 275.00,
				'imagen' 		=> 'https://www.proandroid.com/wp-content/uploads/2017/12/Nokia-7-Gloss-Black-Hero-1200x800.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],

		);

		Product::insert($data);

	}

}
