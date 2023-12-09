<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
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
     * Stpre a newly created resource in storage.
     */
    public function store(Request $request): View|Response
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
        ]);

        if ($validator->fails()) {
            return response(
                view('components.form.todo', [
                    'errors' => $validator->errors(),
                ]),
                422
            )
                ->header('HX-Retarget', '#todo-form')
                ->header('HX-Reswap', 'outerHTML');
        }

        Todo::create($validator->validated());

        return response(
            view('components.todo', [
                'todo' => Todo::latest()->first(),
            ]),
            201
        )
            ->header('HX-Trigger', 'removeEmpty');

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
