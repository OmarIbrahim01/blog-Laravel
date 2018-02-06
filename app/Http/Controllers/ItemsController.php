<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
    public function index(){
    	$items = Item::all();
    	return view('items')->withItems($items);
    }
}
