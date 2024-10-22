<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //payment
    function payment() {
        $payment = Payment::all();
        return view('backend.payment.payment', compact('payment'));
    }

    function payment_store(Request $request) {
        $request->validate([
            'bkash' => 'required',
            'rocket' => 'required',
            'type1' => 'required',
            'type2' => 'required',
            'description1' => 'required',
            'description2' => 'required',
        ]);
        Payment::insert([
            'bkash' => $request->bkash,
            'rocket' => $request->rocket,
            'description1' => $request->description1,
            'description2' => $request->description2,
            'type1' => $request->type1,
            'type2' => $request->type2,
            'created_at' => Carbon::now(),
        ]);
        return back()->withSuccess('Payment details added successfully');
    }

    // payment_delete
    function payment_delete($payment_id) {
        Payment::find($payment_id)->delete();
        return back()->withSuccess('Payment deleted successfully');
    }
}
