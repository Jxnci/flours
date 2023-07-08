<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Buy;
use App\Models\Category;
use App\Models\DetailBuy;
use App\Models\DetailRecipe;
use App\Models\DetailSale;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Suplies;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        User::factory(10)->create();
        Category::factory(5)->create();
        Type::factory(5)->create();
        Unit::factory(5)->create();
        
        Sale::factory(15)->create();
        Product::factory(30)->create();
        Suplies::factory(30)->create();
        Buy::factory(15)->create();

        DetailBuy::factory(12)->create();
        DetailSale::factory(12)->create();
        DetailRecipe::factory(12)->create();
    }
}
