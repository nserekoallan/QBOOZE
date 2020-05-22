<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public function customers(){
      return $this->belongsto(Customer::class);
    }
}
