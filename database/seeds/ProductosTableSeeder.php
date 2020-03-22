<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
    	$faker = \Faker\Factory::create();

    	for ($i=1; $i <= 30; $i++) {
    		 Producto::create([
    			'nombre'          => $faker->text(10),
		        'descripcion'     => $faker->text(20),
		        'existencia'      => $faker->randomDigit(6),
		        'lote'            => $faker->unique()->text(6),
		        'fecha_de_compra' => $faker->date($format = 'Y-m-d', $max = 'now'),
    		]);
    	}
    }
}
