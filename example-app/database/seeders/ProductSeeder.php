<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'description' => 'This is a sample product',
                'image' => 'https://picsum.photos/200/300?random=1'
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'description' => 'This is a sample product',
                'image' => 'https://picsum.photos/200/300?random=2'
            ],
            [
                'id' => 3,
                'name' => 'Product 3',
                'description' => 'This is a sample product',
                'image' => 'https://picsum.photos/200/300?random=3'
            ],
        ];

        foreach($products as $product){
			$table = \App\Models\Products::where('id', $product['id'])->first();
			if (is_null($table)) {
				$table = new \App\Models\Products;
			}

			$table->id = $product['id'];
			$table->name = $product['name'];
			$table->description = $product['description'];
			$table->image = $product['image'];
			$table->save();
		}
    }
}
