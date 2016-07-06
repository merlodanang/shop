
<?php
use Illuminate\Database\Seeder;
use App\Product;
use App\Order;
class ItemSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::lists('id')->toArray();
        $orders = Order::lists('id')->toArray();
        foreach($orders as $id) 
        {
            $randId = array_rand($products, mt_rand(2,10));
            foreach($randId as $rand) {
                factory(\App\Item::class)->create([
                    'product_id' => $rand,
                    'order_id' => $id,
                ]);
            }
        }
        
    }
}
 