<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    
        public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        
       $email = Auth::user()->email;
        $todos = Todo::all()->where('email', $email);
        $data = [
            'todos' => $todos
        ];
        
        return view ('todos.index', $data);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());

        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());

        return redirect('/todos');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect('/todos');
    }
}