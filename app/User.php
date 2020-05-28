<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\seller;
use App\Billing;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','phonenumber','phonenumber_isVerified','location','orders','billing_id','role','seller_id',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        if ($this->role === 'seller') {
            $seller = seller::where('id',$this-> seller_id)->first();
            return [
            'id' => $this -> id,
            'role' => $this-> role,
            'seller_id' => $this-> seller_id,
            'sellerData' => json_encode($seller)
        ];
        }
        return [
            'id' => $this -> id,
            'role' => $this-> role,
            'seller_id' => $this-> seller_id,
        ];
    }

    public function seller()
    {
        return $this->belongsTo(seller::class);
    }
    public function billing()
    {
        return $this->hasMany(Billing::class);
    }
    
}
