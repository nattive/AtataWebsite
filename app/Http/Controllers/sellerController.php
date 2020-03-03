<?php

namespace App\Http\Controllers;

use App\Http\Resources\sellerResource;
use App\seller;
use App\User;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        $seller = seller::latest()->parginate(20);

        return sellerResource::collection($seller);
    }
    public function create(Request $request)
    {
        // return $request->all();
        
        $datavalidate = $request->validate(
            [
                'user_id' => 'required',
                'Product_Category' => 'required',
                'AddressLine1' => 'required',
                'AddressLine2' => '',
                'cityOrTown' => 'required',
                'State' => 'required',
                'Country' => 'required',
                'TIN' => '',
                'PersonInCharge' => 'required',
                'BusinessRegistration' => '',
                'VATRegisterationStatus' => '',
                'Legal_or_business_name' => 'required',
                'Is_verified' => '',
                'Bank' => 'required',
                'Bank_code' => 'required',
                'Account_name' => 'required',
                'IBAN' => '',
                'Account_number' => 'required',
                'BVN' => 'required',
                'atataId' => 'required',
                'Seller_id' => '',
            ]
        );

        $ammendedData = [
            'Is_verified' => false
        ];
        $seller = seller::create(array_merge($datavalidate, $ammendedData));
        $user =User::where('id',  $request ->user_id)->first();
        // return $user;
        $user->seller_id = $seller->id;
        $user->role = 'seller';
        $user->update();
        // return $user;
        session(['seller' =>  $seller]);
        return response(['message' => 'Seller Account as been created successfully', 'seller' => $seller], 200);
    }
}
