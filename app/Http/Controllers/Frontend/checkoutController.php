<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function checkout(){
        return view('FrontendExtra.main.checkout');
    }
}
