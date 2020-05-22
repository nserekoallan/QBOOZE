<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorCatalogue extends Model
{
    public function brewers(){
      return $this->belongsto(User::class);
    }
}
