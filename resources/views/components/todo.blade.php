<li>
    <label for="todo-{{ $todo->id }}" @class([
        'toggle animate  flex w-full items-center justify-between rounded bg-gray-900 px-3 py-2 shadow duration-200',
        'opacity-20' => $todo->completed,
    ])>
        <div class="flex items-center space-x-2">
            <form hx-target="closest li" hx-swap="outerHTML">
                @csrf
                <input hx-put="todos/{{ $todo->id }}"
                    id="todo-{{ $todo->id }}" name="checked" type="checkbox"
                    @checked($todo->completed) />

            </form>
            <div>
                {{ $todo->title }}
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <form hx-confirm="Are you sure?"
                hx-delete="todos/{{ $todo->id }}" hx-target="closest li"
                hx-swap="delete">
                @csrf
                <button class="text-sm text-red-500" type="submit">
                    delete
                </button>
            </form>
        </div>
    </label>
</li>
