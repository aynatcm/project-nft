<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::with('user')->get();
        $users = User::all();
        $collection = Collection::with('items')->get();
        return view('welcome', ['items'=>$items, 'collection' => $collection,'users'=>$users]);
    }
}
