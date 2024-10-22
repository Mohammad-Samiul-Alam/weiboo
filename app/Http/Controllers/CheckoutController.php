<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //checkout
    function checkout() {
        $carts = Cart::where('customer_id', Auth::guard('customerauth')->id())->get();
        $payments = Payment::latest()->take(1);
        return view('frontend.checkout.checkout', [
            'cart' => $carts,
            'payments' => $payments,
            
        ]);
    }
}
