
<?php
use Illuminate\Database\Seeder;
use App\SubCategory;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = SubCategory::lists('id')->toArray();
        $faker = Faker::create();
        for ($i = 0; $i <= 200; $i++) {
            $title = $faker->text(10);
            factory(\App\Product::class)->create([
                'sub_category_id' => $faker->randomElement($id),
                'title' => $title,
                'slug' => str_slug($title)
            ]);
        }
    }
}
 