<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateItemController extends Controller
{
//    public function index(User $user)
//    {
//        $categories = Category::all()->keyBy('id');
//        $collections = Collection::all()->keyBy('id');
//        return view('create-item', ['user' => $user, 'categories' => $categories, 'collections' => $collections]);
//    }

    public function index(User $user, Item $item)
    {
//        $items = Item::where('user_id', $user->id)->get();
        $items = Item::with('user')->where('user_id', $user->id)->get();

        return view('author', ['user' => $user, 'item' => $items]);
    }

    public function create(User $user, Item $item)
    {
        $categories = Category::all()->keyBy('id');
        $collections = Collection::all()->keyBy('id');
        $user = User::all()->keyBy('id');
        $item = Item::all();

        return view('create-item', ['users' => $user, 'categories' => $categories, 'collections' => $collections, 'item' => $item]);
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
        $items = $user->items()->where('id', '!=', $item->id)->get();
        $collection = Collection::with('user', 'items')->get();

        return view('show', ['item' => $item, 'user' => $user, 'collection' => $collection, 'items' => $items]);
    }


    public function like(Item $item)
    {
        if ($like = $item->likes()->where('user_id', Auth::id())->first()) {
            $like->delete();
        } else {
            $item->likes()->create(['user_id' => Auth::id()]);
        };
        return back();
    }

}
