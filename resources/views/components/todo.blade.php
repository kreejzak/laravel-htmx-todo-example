<li>
    <label
        for="todo-{{ $todo->id }}"
        @class([
            'toggle animate  flex w-full items-center justify-between rounded bg-gray-900 px-3 py-2 shadow duration-200',
            'opacity-20' => $todo->completed,
        ])
    >
        <div class="flex ml-2 items-center mr-2 space-x-2">
            <input
                hx-put="todos/{{ $todo->id }}"
                hx-target="closest li"
                hx-swap="outerHTML"
                id="todo-{{ $todo->id }}"
                name="checked"
                type="checkbox"
                @checked($todo->completed)
            />

            <div @class([
                'line-through' => $todo->completed,
            ])>
                {{ $todo->title }}
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <button
                hx-delete="todos/{{ $todo->id }}"
                hx-trigger="click"
                hx-confirm="Are you sure?"
                hx-target="closest li"
                hx-swap="delete"
                class="text-sm text-red-500"
                type="submit"
            >
                delete
            </button>
        </div>
    </label>
</li>
