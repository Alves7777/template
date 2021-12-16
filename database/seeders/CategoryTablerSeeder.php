<?php

namespace Database\Seeders;

use App\Models\Ecommerce\Category\Category;
use Illuminate\Database\Seeder;

class CategoryTablerSeeder extends Seeder
{

    public function run()
    {

        $cat1 = new Category(['category' => 'Informatica']);
        $cat1->save();

        $cat2 = new Category(['category' => 'Eletrônico']);
        $cat2->save();

    }

}
