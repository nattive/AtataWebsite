<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    protected $fillable = [
        'user_id',
        'Product_Category',
        'AddressLine1',
        'AddressLine2',
        'cityOrTown',
        'State',
        'Country',
        'TIN',
        'PersonInCharge',
        'BusinessRegistration',
        'VATRegisterationStatus',
        'Legal_or_business_name',
        'Is_verified',
        'Bank',
        'Bank_code',
        'Account_name',
        'IBAN',
        'Account_number',
        'BVN',
        'atataId',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
}
