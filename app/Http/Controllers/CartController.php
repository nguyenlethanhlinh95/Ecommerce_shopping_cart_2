<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Melihovv\ShoppingCart\CartItem;


class CartController extends Controller
{
    //
    public function index()
    {
        $cart = CartItem::add();
        return view ('cart.index');
    }

    public function addItem($id){
        echo $id;
    }
}
