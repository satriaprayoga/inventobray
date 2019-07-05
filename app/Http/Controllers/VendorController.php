<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory\Vendor;

class VendorController extends Controller
{
    //
    public function index(){

        $vendors=Vendor::all();
        return response()->json($vendors);
    }
}
