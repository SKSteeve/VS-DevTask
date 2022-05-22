<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newCategory = new Category();
        $newCategory->name = 'Laptops';
        $newCategory->created_at = now();
        $newCategory->updated_at = now();
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Phones';
        $newCategory->created_at = now();
        $newCategory->updated_at = now();
        $newCategory->save();

        $newCategory = new Category();
        $newCategory->name = 'Computers';
        $newCategory->created_at = now();
        $newCategory->updated_at = now();
        $newCategory->save();
    }
}
