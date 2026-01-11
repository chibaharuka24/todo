<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('index', compact('todos'));
    }

    public function store(TodoRequest $request) {
        $todo = $request->only(['content']);
        Todo::create($todo);
        return redirect('/');
    }

    public function update(TodoRequest $request) 
    {
        $form = $request->all();
        Todo::find($request->id)->update($form);
        return redirect('/')->with('success','Todoが更新されました');
    }

    public function destroy(TodoRequest $request) {
        Todo::find($request->id)->delete();
        return redirect('/')->with('success','Todoが削除されました');
    }
}
