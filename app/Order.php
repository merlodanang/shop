<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'orders';
    
    protected $fillable = [
        'fullname', 
        'email',
        'address1',
        'address2',
        'facebook',
        'country',
        'phone',
        'note',
        ];
    
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
