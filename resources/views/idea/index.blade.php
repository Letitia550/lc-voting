<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-full md:w-2/3 relative">
            <div class="absolute text-gray-500 h-full flex items-center ml-2">
                <svg class="w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-700">
        </div>
    </div> <!---end filters---->

    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
            <div
                x-data
                @click="
                    const clicked = $event.target

                    const target = clicked.tagName.toLowerCase()

                    const ignores = ['button', 'path', 'svg', 'a']

                    if (! ignores.includes(target) ) {
                        clicked.closest('.idea-container').querySelector('.idea-link').click()
                    }
                "
                class="idea-container hover:shadow-card cursor-pointer transition duration-150 easy-in bg-white rounded-xl flex"
            >
                <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 easy-in font-bold text-xxs uppercase
                        rounded-xl px-4 py-3">Vote</button>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                    <div class="flex-none mx-2 md:mx-0">
                        <a href="#">
                            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                        </a>
                    </div>
                    <div class="flex flex-col justify-between w-full mx-2 md:mx-4">
                        <h4 class="text-xl font-semibold mt-2 md:mt-0">
                            <a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <div class="text-gray-600 mt-3 line-clamp-3">
                            {{ $idea->description }}
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>&bull;</div>
                                <div>Category</div>
                                <div>&bull;</div>
                                <div class="text-gray-900">3 Comments</div>
                            </div>

                            <div
                                x-data="{ isOpen: false}"
                                class="flex items-center space-x-2 mt-4 md:mt-0"
                            >
                                <div class="rounded-full bg-gray-200 text-xxs font-bold text-center px-4 py-2 w-28 h-7 leading-none uppercase">Open</div>
                                <button
                                    @click="isOpen = !isOpen"
                                    class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 easy-in px-3"
                                >
                                    <svg class="w-6 h-6" fill="#d1d5db" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0
                                    11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>

                                    <ul
                                        x-cloak
                                        @keydown.escape.window="isOpen = false"
                                        x-show.transition.origin.top.left="isOpen"
                                        @click.away="isOpen = false"
                                        class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left
                                               md:ml-8 top-8 md:top-6 right-0 md:left-0"
                                    >
                                        <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Mark as Spam</a></li>
                                        <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Delete Post</a></li>
                                    </ul>
                                </button>

                            </div>

                            <div class="flex items-center md:hidden mt-4 md:mt-0">
                                <div class="bg-gray-100 rounded-xl text-center h-10 px-4 py-2 pr-8 ">
                                    <div class="text-sm font-semibold leading-none">12</div>
                                    <div class="text-xs font-semibold text-gray-400 leading-none">Votes</div>
                                </div>

                                <button class="w-20 bg-gray-200 border border-white transition duration-150 easy-in font-bold text-xxs uppercase
                                rounded-xl px-4 py-3 -mx-5">Vote</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!---end idea-container---->
        @endforeach
    </div> <!---end ideas-container---->

    <div class="my-8">
        {{ $ideas->links() }}
    </div>

</x-app-layout>
