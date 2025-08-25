<?php

namespace Database\Seeders;

use App\Models\Ecommerce\Category\Category;
use Illuminate\Database\Seeder;

class CategoryTablerSeeder extends Seeder
{

    public function run()
    {

    $cat1 = new Category(['category' => 'Informatica', 'client_id' => 1]);
    $cat1->save();

    $cat2 = new Category(['category' => 'Eletrônico', 'client_id' => 1]);
    $cat2->save();

    }

}
