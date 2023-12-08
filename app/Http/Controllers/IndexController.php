<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'todos' => Todo::all(),
        ]);
    }
}
