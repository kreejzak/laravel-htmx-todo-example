<form
    hx-post="{{ route('todos.store') }}"
    hx-target="#todos"
    hx-swap="afterbegin"
    hx-on::before-request=" this.querySelectorAll('.error').forEach(el => el.remove()) "
    hx-on::after-request=" if(event.detail.successful) this.reset() "
    id="todo-form"
>
    <div class="animate flex flex-col space-y-2">
        <textarea
            name="title"
            placeholder="Add a todo..."
            id="title"
            class="py-2 px-3 bg-gray-900 rounded"
            rows="2"
        ></textarea>

        @if ($errors->has('title'))
            <div class="error text-red-500 text-sm ">
                {{ $errors->first('title') }}
            </div>
        @endif

        <button
            class="flex justify-center items-center py-2 w-full h-12 font-bold text-center text-teal-50 bg-teal-700 rounded"
            type="submit"
        >
            <img
                src="/images/tail-spin.svg"
                class="htmx-indicator"
                width="25"
                alt="spinner"
            >
            <span>
                Add todo
            </span>
        </button>
    </div>
</form>
