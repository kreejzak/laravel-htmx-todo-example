<form
    hx-post="/todos"
    hx-target="#todos"
    hx-swap="afterbegin"
    hx-on::after-request=" if(event.detail.successful) this.reset()"
>
    <div class="flex flex-col space-y-2">
        <textarea
            name="title"
            placeholder="Add a todo..."
            required
            id="title"
            class="py-2 px-3 bg-gray-900 rounded"
            rows="2"
        ></textarea>
        <button
            class="flex justify-center items-center py-2 w-full h-12 font-bold text-center text-teal-50 bg-teal-700 rounded"
            type="submit"
        >
            <img
                src="https://samherbert.net/svg-loaders/svg-loaders/tail-spin.svg"
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
