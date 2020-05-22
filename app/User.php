<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //
    // //JWTAuth
    // public function getJWTIdentifier(){
    //   return $this->getKey();
    // }
    // public function getJWTCustomClaims(){
    //   return [];
    // }

    //relationships
    public function orders(){
      return $this->hasmany(Order::class);
    }
    public function shoppingCarts(){
      return $this->hasmany(ShoppingCart::class);
    }
    public function vendorCatalogues(){
      return $this->hasMany(VendorCatalogue::class);
    }
    public function customerCatalogues(){
      return $this->hasMany(CustomerCatalogue::class);
    }


}
