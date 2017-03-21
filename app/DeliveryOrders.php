<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryOrders extends Model
{
    //protected $table = 'delivery_orders';
    
    public $fillable = ['id','donumber','accnumber','dodate','soldto','shipto','remark','receiver','approval'];
   
}
