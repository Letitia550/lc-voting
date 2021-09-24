<form wire:submit.prevent="createIdea" action="#" method="POST" class="space-y-4 px-4 py-6">
    <div>
        <input wire:model.defer="title" type="text" placeholder="Your Idea" required class=" border-none text-sm w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2">
        @error('title')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <select wire:model.defer="category" name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl border-none px-4 py-2">
            @foreach( $categories as $category)
                <option value={{ $category->id }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    @error('category')
    <p class="text-red text-xs mt-1">{{ $message }}</p>
    @enderror
    <div>
        <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl
        placeholder-gray-900 text-sm px-4 py-2 border-none" placeholder="Describe your idea" required></textarea>
        @error('description')
        <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-between space-x-3">
        <button
            type="button"
            class="flex items-center justify-center w-1/2 h-11 rounded-xl bg-gray-200 border border-gray-200 hover:border-gray-400
                                font-semibold text-xs transition duration-150 easy-in px-6 py-3"
        >
            <svg class="text-gray-600 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                    fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0
                                        012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
            </svg>
            <span class="ml-1">Attach</span>
        </button>

        <button
            type="submit"
            class="flex items-center justify-center w-1/2 h-11 rounded-xl bg-blue border border-blue hover:bg-blue-hover
                                font-semibolf text-xs text-white transition duration-150 easy-in px-6 py-3"
        >
            <span>Submit</span>
        </button>
    </div>

    <div>
        @if (session('success_message'))
            <div
                x-data="{ isVisibile: true }"
                x-init="
                    setTimeout(() => {
                        isVisibile = false;
                    }, 5000)
                "
                x-show.transition.duration.1000ms="isVisibile"
                class="text-green mt-4"
            >
                {{ session('success_message') }}
            </div>
        @endif
    </div>
</form>
