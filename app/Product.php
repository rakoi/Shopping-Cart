<?php

namespace App;
use App\Category;
use Freshbitsweb\LaravelCartManager\Traits\Cartable;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use Cartable;
    public function Category(){
    	return $this->belongsTo('App\Category');
    }
}
