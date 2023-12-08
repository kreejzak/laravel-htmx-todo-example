<div class="flex flex-col p-5 mx-auto space-y-4 w-full max-w-xl bg-gray-800 rounded shadow">
    <ul id="todos" class="flex flex-col space-y-2 animate">
        @forelse ($todos as $todo)
            @include('components.todo', ['todo' => $todo])
        @empty
            <li class="text-center text-gray-200">No todos yet.</li>
        @endforelse
    </ul>

    @include('components.form.todo')
</div>
