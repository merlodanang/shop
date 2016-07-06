<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tables = [
            'categories',
            'sub_categories',
            'details',
            'products',
            'users',
            'orders',
            'items'
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(DetailSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
