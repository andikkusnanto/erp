<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductServices extends Model
{
       //protected $table = 'product_services';
    
    public $fillable = ['id','productcode','productname','materialtype','spesification','minorder','minqty'];
 
}
