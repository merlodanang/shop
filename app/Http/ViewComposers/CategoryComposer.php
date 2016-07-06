<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
use App\Product;

class CategoryComposer
{

    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $category;
    protected $product;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        
        $with['subCategories'] = function($query) {
            return $query->select('id', 'category_id', 'name','slug');
        };
        
        $category = $this->category
                ->select('id', 'name', 'slug')
                ->with($with)->get();
        $pro = $this->product->select('id','name','img','title','price','slug')->take(15)->get()->toArray();
        $recommended = $this->product->select('id','name','img','title','price','slug')->take(10)->get()->toArray();
        $arr = [];
        for($i=0; $i<3;$i++) {
            $j=0;
            $arr[$i] = [
                $recommended[$j],
                $recommended[$i+1],
                $recommended[$i+2]
            ];
            $j+= 3;
            
        }
        $view->with('category', $category)
            ->with('pro', $pro)
            ->with('recommended', $arr);
    }
}
