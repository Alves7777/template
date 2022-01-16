<?php

namespace Database\Seeders;

use App\Models\Ecommerce\Category\Category;
use App\Models\Ecommerce\Product\Product;
use Illuminate\Database\Seeder;


class ProductTablerSeeder extends Seeder
{

    public function run()
    {
        $cat = new Category(['category' => 'Geral']);
        $cat->save();

        $cat1 = new Category(['category' => 'Informatica']);
        $cat1->save();

        $cat2 = new Category(['category' => 'Eletrônico']);
        $cat2->save();

        $prod = new Product([ 'name'=>'Produto 1', 'value'=>220, 'photo'=>'/assets/img/portfolio/portfolio-1.jpg', 'description'=>'', 'category_id' => $cat->id ]);
        $prod->save();

        $prod2 = new Product([ 'name'=>'Produto 2', 'value'=>16, 'photo'=>'/assets/img/portfolio/portfolio-2.jpg', 'description'=>'', 'category_id' => $cat2->id ]);
        $prod2->save();

        $prod3 = new Product([ 'name'=>'Produto 3', 'value'=>105, 'photo'=>'/assets/img/portfolio/portfolio-3.jpg', 'description'=>'', 'category_id' => $cat->id ]);
        $prod3->save();

        $prod4 = new Product([ 'name'=>'Produto 4', 'value'=>300, 'photo'=>'/assets/img/portfolio/portfolio-4.jpg', 'description'=>'', 'category_id' => $cat1->id ]);
        $prod4->save();

        $prod5 = new Product([ 'name'=>'Produto 5', 'value'=>100, 'photo'=>'/assets/img/portfolio/portfolio-5.jpg', 'description'=>'', 'category_id' => $cat->id ]);
        $prod5->save();

        $prod6 = new Product([ 'name'=>'Produto 6', 'value'=>150, 'photo'=>'/assets/img/portfolio/portfolio-6.jpg', 'description'=>'', 'category_id' => $cat1->id ]);
        $prod6->save();

    }

}
