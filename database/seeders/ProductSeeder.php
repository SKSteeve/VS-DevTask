<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $newProduct = new Product();
        $newProduct->category_id = 2;
        $newProduct->sku = 'IP12P1200';
        $newProduct->name = 'iPhone 12';
        $newProduct->quantity = 20;
        $newProduct->price = 1200;
        $newProduct->created_at = now();
        $newProduct->updated_at = now();
        $newProduct->save();

        $newProduct = new Product();
        $newProduct->category_id = 2;
        $newProduct->sku = 'HWN92100';
        $newProduct->name = 'Huawei Nova 9';
        $newProduct->quantity = 12;
        $newProduct->price = 2100;
        $newProduct->created_at = now();
        $newProduct->updated_at = now();
        $newProduct->save();

        $newProduct = new Product();
        $newProduct->category_id = 1;
        $newProduct->sku = 'ACERAS3';
        $newProduct->name = 'Acer Aspire 3';
        $newProduct->quantity = 36;
        $newProduct->price = 2200;
        $newProduct->created_at = now();
        $newProduct->updated_at = now();
        $newProduct->save();

        $newProduct = new Product();
        $newProduct->category_id = 3;
        $newProduct->sku = 'LENDEC5P700';
        $newProduct->name = 'Lenovo IdeaCentre 5';
        $newProduct->quantity = 7;
        $newProduct->price = 1700;
        $newProduct->created_at = now();
        $newProduct->updated_at = now();
        $newProduct->save();
    }
}
