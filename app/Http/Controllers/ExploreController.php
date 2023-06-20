<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        $item=Item::with('user')->get();
        $categories = Category::all();
        $collections = Collection::all();

        return view('explore',['item'=>$item,'categories'=>$categories,'collections'=>$collections]);
    }

    public function filter(Request $request)
    {
        $query = Item::with('user','likes')->withCount('likes');

        if($request->filled('categories')){
            $category = $request->input('categories');
            $query->whereIn('category_id',$category);
        }

        if ($request->filled('collections')){
            $collections = $request->input('collections');
            $query->whereIn('collection_id',$collections);
        }



        $item = $query->get();
        $categories = Category::all();
        $collections = Collection::all();
        return view('explore',compact('item','categories', 'collections'));
    }

}
