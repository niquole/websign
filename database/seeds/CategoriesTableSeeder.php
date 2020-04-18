<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Web Design']);
        Category::create(['name' => 'App design']);
        Category::create(['name' => 'Marketing']);
        Category::create(['name' => 'Branding']);
        Category::create(['name' => 'Animations']);
        Category::create(['name' => 'Other']);


    }
}
