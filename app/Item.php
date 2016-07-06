<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'items';
    
    public $timestamps = true;
    
    protected $fillable = [
        'product_id', 
        'order_id',
        'quantity'
        ];
    
    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }
    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
}
