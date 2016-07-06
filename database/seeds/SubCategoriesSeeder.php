
<?php
use Illuminate\Database\Seeder;
use App\SubCategory;
use App\Category;
use Faker\Factory as Faker;

class SubCategoriesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = Category::lists('id')->toArray();
        $faker = Faker::create();
        for($i = 0; $i<50; $i++) {
            factory(SubCategory::class)->create([
                'category_id' => $faker->randomElement($ids)
            ]);
        }
    }
}
