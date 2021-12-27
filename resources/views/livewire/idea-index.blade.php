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
            <div class="font-semibold text-2xl @if ($hasVoted) text-blue @endif">{{ $votesCount }}</div>
            <div class="text-gray-500">Votes</div>
        </div>
        @if ($hasVoted)
            <div class="mt-8">
                <button wire:click.prevent="vote"
                        class="w-20 bg-blue border text-white border-blue hover:bg-blue-hover transition duration-150 easy-in font-bold text-xxs uppercase
                        rounded-xl px-4 py-3">
                    Voted
                </button>
            </div>
        @else
            <div class="mt-8">
                <button
                    wire:click.prevent="vote"
                    class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 easy-in font-bold text-xxs uppercase
                        rounded-xl px-4 py-3">
                    Vote
                </button>
            </div>
        @endif

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
                @admin
                    @if($idea->spam_reports > 0)
                        <div class="text-red mb-2"> Spam Reports: {{ $idea->spam_reports }}</div>
                    @endif
                @endadmin
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
                </div>

                <div class="flex items-center md:hidden mt-4 md:mt-0">
                    <div class="bg-gray-100 rounded-xl text-center h-10 px-4 py-2 pr-8 ">
                        <div class="text-sm font-semibold leading-none @if ($hasVoted) text-blue @endif">{{ $votesCount }}</div>
                        <div class="text-xs font-semibold text-gray-400 leading-none">Votes</div>
                    </div>
                    @if ($hasVoted)
                        <button
                            wire:click.prevent="vote"
                            class="w-20 bg-blue border border-blue text-white hover:bg-blue-hover transition duration-150 easy-in font-bold text-xxs uppercase
                                rounded-xl px-4 py-3 -mx-5">
                            Voted
                        </button>
                    @else
                        <button
                            wire:click.prevent="vote"
                            class="w-20 bg-gray-200 border border-white transition hover:bg-gray-200 duration-150 easy-in font-bold text-xxs uppercase
                                rounded-xl px-4 py-3 -mx-5">
                            Vote
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> <!---end idea-container---->
