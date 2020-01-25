<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class supplierAdminNavigator extends Controller
{
    public function dashboard()
    {
        return view('supplier\dashboard');
    }
    
    public function manageProduct()
    {
        return view('supplier\manageProduct');
    }
    public function addProduct()
    {
        return view('supplier\addProduct');
    }
}
