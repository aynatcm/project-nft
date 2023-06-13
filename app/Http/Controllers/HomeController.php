<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Item $item, User $user)
    {
        $item = Item::all();
        $user = User::all();
        return view('welcome', ['item' => $item, 'user' => $user]);
    }
}
