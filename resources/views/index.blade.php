@extends('layouts.default')
@section('content')
    <h1 class="mb-4 text-2xl font-bold text-center text-gray-200 uppercase">
        TODOS
    </h1>
    @include('components.todos', ['todos' => $todos])
@endsection
