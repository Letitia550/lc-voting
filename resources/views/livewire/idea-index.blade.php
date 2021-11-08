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
            <div class="font-semibold text-2xl">{{ $votesCount }}</div>
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
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 Comments</div>
                </div>

                <div
                    x-data="{ isOpen: false}"
                    class="flex items-center space-x-2 mt-4 md:mt-0"
                >
                    <div class="{{ $idea->status->classes }} rounded-full text-xxs font-bold text-center px-4 py-2 w-28 h-7 leading-none uppercase">{{ $idea->status->name }}</div>
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
                        <div class="text-sm font-semibold leading-none">{{ $votesCount }}</div>
                        <div class="text-xs font-semibold text-gray-400 leading-none">Votes</div>
                    </div>

                    <button class="w-20 bg-gray-200 border border-white transition duration-150 easy-in font-bold text-xxs uppercase
                                rounded-xl px-4 py-3 -mx-5">Vote</button>
                </div>
            </div>
        </div>
    </div>
</div> <!---end idea-container---->
