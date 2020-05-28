<?php

namespace App\Http\Controllers;

use App\Http\Resources\sellerResource;
use App\seller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;
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
    public function show($id){
        // return  '$seller';
        try {
            // $user = User::findOrFail($id);
            $seller = seller::where('user_id', $id)->first();
            return  response($seller,200);
        } catch (\Throwable $th) {
            return response('an error occored ' .$th, 500);
        }
    }
    public function create(Request $request)
    {      
        /**
            Generate unique ATATA ID
        **/
            $microtime = explode(" ", microtime());
            $userId = $request -> user_id;
            $atataId = 'AS0'.$userId. $microtime[1];
        // return $request -> all();
        $datavalidate = $request->validate(
            [
                'user_id' => "required",
                'Product_Category' => "required",
                'AddressLine1' => "required",
                'AddressLine2' => "",
                'cityOrTown' => "required",
                'State' => "required",
                'Country' => "required",
                'TIN' => "",
                'PersonInCharge' => "",
                'Phone_num' => "required",
                'email' => "",
                'website' => "",
                'BusinessRegistration' => "",
                'VATRegisterationStatus' => "",
                'Legal_or_business_name' => "",
                'Is_verified' => "",
                'Bank' => "",
                'Bank_code' => "",
                'Account_name' => "",
                'IBAN' => "",
                'Account_number' => "",
                'BVN' => "",
                'atataId' => "",
            ]
        );

        $ammendedData = [
            'Is_verified' => false,
            'atataId' => $atataId
        ];
        $seller = seller::create(array_merge($datavalidate, $ammendedData));
        // return $seller -> id;
        $user = User::where('id',  $userId)->first();
        // return $user;
        $user -> seller_id = $seller->id;
        $user -> role = 'seller';
        // return $user;
        $user->update();
        // return $user;
        // session(['seller' =>  $seller]);
        return response(['message' => 'Seller Account as been created successfully', 'status' => 200, 'seller' => $seller], 200);
    }
}
