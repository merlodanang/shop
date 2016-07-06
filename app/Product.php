<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'products';
    
    protected $fillable = ['slug', 'name', 'title', 'about', 'price', 'img', 'sub_category_id'];
    
    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
    public function getAboutAttribute($value)
    {
        return html_entity_decode($value);
    }

}
