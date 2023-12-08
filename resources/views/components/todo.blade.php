<li>
    <label class="flex justify-between items-center py-2 px-3 w-full bg-gray-900 rounded shadow">
        <div>
            {{ $todo->title }}
        </div>
        <div class="flex items-center space-x-2">
            <form hx-confirm="Are you sure?" hx-delete="todos/{{ $todo->id }}" hx-target="closest li" hx-swap="delete">
                @csrf
                <button class="text-sm text-red-500" type="submit">
                    delete
                </button>
            </form>
            <input type="checkbox" value="{{ $todo->completed }}">
        </div>
    </label>
</li>
