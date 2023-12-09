<div
    class="flex flex-col p-5 mx-auto space-y-4 w-full max-w-xl bg-gray-800 rounded shadow">
    <ul
        id="todos"
        class="flex flex-col space-y-2 animate"
    >
        @each('components.todo', $todos, 'todo', 'components.empty')
    </ul>

    @include('components.form.todo')
</div>
