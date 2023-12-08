<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\View\View;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('index', [
            'todos' => Todo::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): View
    {
        $attributes = request()->validate([
            'title' => 'required',
        ]);

        Todo::create($attributes);

        return view('components.todo', [
            'todo' => Todo::latest()->first(),
        ]);
    }

    /**
     * Delete the specified resource from db
     */
    public function destroy(Todo $todo): void
    {
        $todo->delete();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Todo $todo): View
    {
        $todo->check($todo->completed);
        $todo = Todo::find($todo->id);

        return view('components.todo', [
            'todo' => $todo,
        ]);
    }
}
