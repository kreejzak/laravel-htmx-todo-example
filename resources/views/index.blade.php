@extends('layouts.default')
@section('content')
    <h1 class="mb-4 font-bold text-center text-gray-200 uppercase font-6xl">TODOS</h1>
    @include('components.todos', ['todos' => $todos])
@endsection
