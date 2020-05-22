<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerCatalogue extends Model
{
    public function customers(){
      return $this->belongsto(User::class);
    }
}
