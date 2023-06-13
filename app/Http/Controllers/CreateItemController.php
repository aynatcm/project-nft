<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class CreateItemController extends Controller
{
//    public function index(User $user)
//    {
//        $categories = Category::all()->keyBy('id');
//        $collections = Collection::all()->keyBy('id');
//        return view('create-item', ['user' => $user, 'categories' => $categories, 'collections' => $collections]);
//    }

    public function index(User $user)
    {
        $items = Item::where('user_id', $user->id)->get();
        return view('author', ['user' => $user]);
    }

    public function create(User $user)
    {
        $categories = Category::all()->keyBy('id');
        $collections = Collection::all()->keyBy('id');
        $users = User::all()->keyBy('id');

        return view('create-item', ['users' => $users, 'categories' => $categories, 'collections' => $collections]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'royalties' => ['required'],
            'size' => ['required'],
            'img_item' => ['required']
        ]);

        Item::create([
            'price' => $request->price,
            'title' => $request->title,
            'description' => $request->description,
            'royalties' => $request->royalties,
            'size' => $request->size,
            'img_item' => $request->img_item,
            'category_id' => $request->category_id,
            'collection_id' => $request->collection_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('create-item.store');
    }

    public function show($name, $item)
    {
        $user = User::where('name', $name)->firstOrFail();
        $item = Item::where('id', $item)->where('user_id', $user->id)->firstOrFail();

        return view('show', ['item' => $item, 'user' => $user]);
    }


}
