
<?php
use Illuminate\Database\Seeder;
use App\Product;
class DetailSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = Product::lists('id')->toArray();
        foreach($ids as $id) {
            factory(\App\Detail::class)->create([
                'product_id' => $id,
            ]);
        }
        
    }
}
 