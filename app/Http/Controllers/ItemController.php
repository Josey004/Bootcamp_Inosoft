<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemStorePost;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function view() {
        return view('insertItem');
    }
    public function index() {
        $itemModel = new Item();

        $items = $itemModel->get();
        // $books = Book::get(); CARA 2

        foreach ($items as $item) {
            echo "Nama Item : " . $item->item_name . '<br>';
            echo "Type Item : " . $item->item_type . '<br>';
            echo "Deskripsi : " . $item->item_desc . '<br>';
            echo "Harga : " . $item->item_price . '<br>';
            echo "Create : " . $item->created_at . '<br>';
            echo "Update : " . $item->updated_at . '<br>';
            echo "------------------------------------<br>";
        }
    }

    public function store(ItemStorePost $request) {
        $post = $request->all();
        $insertItem = [
            'item_name' => $post['item_name'],
            'item_type' => $post['item_type'],
            'item_price' => $post['item_price'],
            'item_desc' => $post['item_desc'],
        ];

        $item = Item::create($insertItem);
        $item->save();

        return redirect()->route('item');
    }
}
