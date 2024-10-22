<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //wishlist
    function wishlist() {
        $wishlists = Wishlist::all();
        return view('frontend.wishlist.wishlist', [
            'wishlists' => $wishlists,
        ]);
    }
    // wishlist_delete
    function wishlist_delete($wishlist_id) {
        Wishlist::find($wishlist_id)->delete();
        return back()->withSuccess('Wishlist deleted successfully.');
    }

    function cart_store_wishlist($wishlist_id) {
        $customer= Wishlist::find($wishlist_id);
        Cart::insert([
            'customer_id' => $customer->customer_id,
            'product_id' => $customer->product_id,
            'color_id' => $customer->color_id,
            'size_id' => $customer->size_id,
            'quantity' => $customer->quantity,
            'created_at' => Carbon::now(),
        ]);
        Wishlist::find($wishlist_id)->delete();
        return back()->withSuccess('Cart added successfully');
    }
}
