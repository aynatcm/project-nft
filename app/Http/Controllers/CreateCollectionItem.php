<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CreateCollectionItem extends Controller
{
    public function index()
    {
        $items = Item::all();
        $users = User::all();
        $collection = Collection::all();
        return view('create-collection',['item'=>$items,'users'=>$users,'collection'=>$collection]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => ['required'],
            'img_collection' => ['required']
        ]);

        $image = $request->file('img_collection');
        $imageName = Str::uuid() . "." . $image->extension();
        $serverImage = Image::make($image);
        $serverImage->fit(1000, 1000);

        $imagePath = public_path('uploads') . '/' . $imageName;
        $serverImage->save($imagePath);

        $data['img_collection'] = $imageName;
        $data['user_id'] = auth()->user()->id;
        Collection::create($data);

        return redirect()->back();
    }
}
