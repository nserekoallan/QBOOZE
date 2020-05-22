<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //relationships
    public function customers(){
      return $this->belongsTo(Customer::class);
    }

}
