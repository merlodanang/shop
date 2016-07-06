
<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<=10; $i++) {
            $name = $faker->name;
            factory(\App\Category::class)->create([
                'name' => $name,
                'slug' => str_slug($name)
            ]);    
        }
        
    }
}
