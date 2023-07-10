<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();

        return view('index')->with('items', $items);
    }

    public function store(Request $request){
        $items_to_do = $request->input('content');
        $new_to_do = new Todo();
        $new_to_do->content = $items_to_do;
        $new_to_do->save();
        return redirect('/');
    }
}
