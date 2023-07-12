<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();
        $msgSuccess = $request->session()->get('msg.success');
        return view('index')->with('items', $items)->with('msgSuccess', $msgSuccess);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return to_route('index')->with('msg.success', 'To do successfully created!');
    }

    public function destroy(Todo $id)
    {
        $id->delete();
        return to_route('index')->with('msg.success', 'To do successfully deleted!');
    }

    public function edit(Todo $id)
    {
        return view('edit')->with('item', $id);
    }

    public function update(Todo $id, Request $request)
    {
        $id->fill($request->all());
        $id->save();

        return to_route('index')->with('msg.success', 'To do successfully updated!');
    }
}
