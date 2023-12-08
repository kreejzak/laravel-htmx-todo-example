<li>
    <label for="todo-{{ $todo->id }}"
        class="flex justify-between items-center py-2 px-3 w-full rounded shadow  toggle animate duration-200 bg-gray-900 {{ $todo->completed ? 'opacity-20' : '' }}">
        <div class="flex items-center space-x-2">
            <form hx-target="closest li" hx-swap="outerHTML">
                @csrf
                <input hx-put="todos/{{ $todo->id }} "id="todo-{{ $todo->id }}" name="checked" type="checkbox"
                    {{ $todo->completed ? 'checked' : '' }} />

            </form>
            <div>
                {{ $todo->title }}
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <form hx-confirm="Are you sure?" hx-delete="todos/{{ $todo->id }}" hx-target="closest li"
                hx-swap="delete">
                @csrf
                <button class="text-sm text-red-500" type="submit">
                    delete
                </button>
            </form>
        </div>
    </label>
</li>
