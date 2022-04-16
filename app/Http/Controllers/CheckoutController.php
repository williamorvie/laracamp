<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function success()
    {
        return view ('success_checkout');
    }
}
