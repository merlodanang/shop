<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'categories';
    
    protected $fillable = ['name'];
    
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
