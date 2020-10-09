<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    public function imageDetails() {
        return $this->hasMany('App\Product_Images');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags','product_tags','product_id','tag_id');
    }
}
