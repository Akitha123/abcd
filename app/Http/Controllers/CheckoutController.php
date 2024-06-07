<?php

namespace App\Http\Controllers;
namespace App\Models;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index()
    {

        $cartItem = Cart::where('user_id', Auth::id())->get();
        return view('chechout', compact('cartItem'));

        }
}