<form hx-post="/todos" hx-target="#todos" hx-swap="afterbegin"
    hx-on::after-request=" if(event.detail.successful) this.reset()">
    @csrf
    <div class="flex flex-col space-y-2">
        <textarea name="title" required id="title" class="py-2 px-3 bg-gray-900 rounded" rows="2"></textarea>
        <button class="py-2 w-full font-bold text-center text-teal-50 bg-teal-700 rounded" type="submit">
            Add todo
        </button>
    </div>
</form>
