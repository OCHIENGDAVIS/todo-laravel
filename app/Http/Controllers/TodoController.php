<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos]);
    }
    public function create()
    {

        return view('todos.create');
    }
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', ['todo' => $todo]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:300',
        ]);
        Todo::create($validatedData);
        return redirect('/todos')->with('message', 'To do created succesfully!!');
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:300',
        ]);
        $todo = Todo::find($id);
        $todo->title =  $validatedData['title'];
        $todo->save();
        return redirect(route('todos.show', ['id' => $id]))->with('message', 'To do updated succesfully!!');
    }
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', ['todo' => $todo]);
    }
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect(route('todos.index'))->with('message', 'Deleted succesfully!');
    }
    public function confirmDelete($id)
    {
        $todo = Todo::find($id);
        return view('todos.delete', ['todo' => $todo]);
    }
}
