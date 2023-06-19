<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
{
    public function like(Collection $collection)
    {
        if ($like = $collection->likes()->where('user_id', Auth::id())->first()) {
            $like->delete();
        } else {
            $collection->likes()->create(['user_id' => Auth::id()]);
        };
        return back();
    }
}
