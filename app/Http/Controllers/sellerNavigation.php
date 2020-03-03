<?php

namespace App\Http\Controllers;

use App\Http\Resources\sellerResource;
use App\seller;
use Illuminate\Http\Request;

class sellerNavigation extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function register($id)
    {
        return view('Register', compact('id'));
    }
    public function index()
    {
        // $seller = seller::where('atataid', $id)->first();
        // dd($seller ->user);
        // if (empty($seller)) {
        //     return response('Error', 404);
        // }
        //     // session()->put('seller', [
            //    sellerResource::collection($seller)
            // ]);
            return view('supplier\sellerContent');
    }

    public function manageProduct()
    {
        return view('supplier\manageProduct');
    }
    public function addProduct()
    {
        return view('supplier\addProduct');
    }
    public function listProduct()
    {
        return view('supplier\manageProduct');
    }
}
