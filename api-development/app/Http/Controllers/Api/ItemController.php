<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $per_page = $request->get('per_page',5);
        $items = Item::paginate($per_page);
        return ItemResource::collection($items);
    }

    public function show($id)
    {
        $item = Item::find($id);
            return ItemResource::make($item);

    }

    public function store(Request $request)
    {
        $data = $request->only(['name','qty','color','price','weight']);
        $item = Item::create($data);
        return ItemResource::make($item);
    }

    public function update(Request $request,$id)
    {
        $data = $request->only(['name','qty','color','price','weight']);
        $item = Item::find($id);
        $item->update($data);
        return ItemResource::make($item);
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
        return response()->json(['message'=>'Item deleted']);
    }

    public function restore($id)
    {
        $item = Item::withTrashed()->find($id);
        $item->restore();
        return ItemResource::make($item);
    }
}
 