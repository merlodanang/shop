<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'sub_categories';
    
    protected $fillable = ['name','category_id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
