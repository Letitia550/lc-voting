<x-app-layout>
    <div>
        <a href="#" class="flex items-center hover:underline font-semibold">
            <svg class="w-6 h-6" fill="#4b5563" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span class="ml-2">All ideas</span>
        </a>
    </div>

    <div class="idea-container mt-4 bg-white rounded-xl flex">
        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Add idea form goes here.
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div class="text-black font-bold">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>

                    <div class="flex items-center space-x-2">
                        <div class="rounded-full bg-gray-200 text-xxs font-bold text-center px-4 py-2 w-28 h-7 leading-none uppercase">Open</div>
                        <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 easy-in px-3">
                            <svg class="w-6 h-6" fill="#d1d5db" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0
                                11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                        </button>
                        <div class="ml-8">
                            <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left">
                                <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Mark as Spam</a></li>
                                <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Delete Post</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="button-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <div
                x-data="{ isOpen: false}"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center bg-blue text-white text-sm w-32 h-11 border
                    border-blue transition duration-150 easy-in hover:bg-blue-hover rounded-xl px-6 py-3"
                >
                    Reply
                </button>
                <div class="absolute z-10 shadow-dialog bg-white font-semibold rounded-xl mt-2 text-left text-sm w-104">
                    <form
                        x-cloak
                        @keydown.escape.window="isOpen = false"
                        x-show.transition.origin.top.left="isOpen"
                        @click.away="isOpen = false"
                        class="space-y-4 px-4 py-6"
                    >
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4" class=" w-full bg-gray-100 text-sm rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Go ahead, don't be shy. Share tour thoughts...."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button
                                type="button"
                                class="flex items-center text-white justify-center w-1/2 h-11 rounded-xl bg-blue border border-blue-300 hover:border-blue
                                text-xs font-semibold transition duration-150 easy-in px-6 py-3"
                            >
                                Post Comment
                            </button>

                            <button
                                type="button"
                                class="flex items-center justify-center w-32 h-11 rounded-xl bg-gray-200 border border-gray-200 hover:border-gray-400
                                text-xs font-semibold transition duration-150 easy-in px-6 py-3"
                            >
                                <svg class="text-gray-600 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                                        fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0
                                        012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div
                x-data="{ isOpen: false }"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="flex items-center justify-center w-36 h-11 rounded-xl bg-gray-200 border border-gray-200 hover:border-gray-400
                                    text-xs transition duration-150 easy-in px-6 py-3 text-gray-800 text-sm font-semibold"
                >
                    <span>Set Status</span>
                    <svg class="w-6 h-6" fill="#6b7280" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>

                <div
                    x-cloak
                    @keydown.escape.window="isOpen = false"
                    x-show.transition.origin.top.left="isOpen"
                    @click.away="isOpen = false"
                    class="absolute z-20 shadow-dialog bg-white font-semibold rounded-xl mt-2 text-left text-sm w-76"
                >
                    <form class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                        <input class="border-none bg-gray-200 text-purple" type="radio" name="radio-direct" value="1">
                                        <span class="text-gray-900 text-sm font-semibold ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="border-none bg-gray-200 text-purple" type="radio" name="radio-direct" value="1">
                                    <span class="text-gray-900 text-sm font-semibold ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="border-none bg-gray-200 text-purple" type="radio" name="radio-direct" value="1">
                                    <span class="text-gray-900 text-sm font-semibold ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="border-none bg-gray-200 text-purple" type="radio" name="radio-direct" value="1">
                                    <span class="text-gray-900 text-sm font-semibold ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input class="border-none bg-gray-200 text-purple" type="radio" name="radio-direct" value="1">
                                    <span class="text-gray-900 text-sm font-semibold ml-2">Closed</span>
                                </label>
                            </div>

                            <div>
                                <textarea name="post_comment" id="post_comment" cols="30" rows="3" class="w-full mt-3 w-full bg-gray-100  text-xs font-semibold rounded-xl placeholder-gray-500 border-none px-4 py-4" placeholder="Add an update comment(optional)"></textarea>
                            </div>

                            <div class="flex items-center space-x-3">
                                <button
                                    type="button"
                                    class="flex items-center justify-center w-32 h-10 rounded-xl bg-gray-200 border border-gray-200 hover:border-gray-400
                                text-xs font-semibold transition duration-150 easy-in px-6 py-3"
                                >
                                    <svg class="text-gray-600 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                                            fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0
                                        012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-1">Attach</span>
                                </button>

                                <button
                                    type="button"
                                    class="flex items-center text-white justify-center w-1/2 h-10 rounded-xl bg-blue border border-blue-300 hover:border-blue
                                text-xs font-semibold transition duration-150 easy-in px-6 py-3"
                                >
                                    Update
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="notify_voters" checked="" class="rounded bg-gray-200">
                                <span class="ml-2 text-xs text-gray-500">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <div
                type="button"
                class="flex items-center justify-center w-32 h-11 rounded-xl uppercase bg-gray-200 border border-gray-200 hover:border-gray-400
                                transition duration-150 easy-in px-6 py-3 text-gray-800 text-xs font-semibold"
            >
                <span>Vote</span>
            </div>
        </div>
    </div> <!----end buttons-container--->

    <div class="comments-container relative space-y-6 ml-22 my-8 pt-4 mt-1">
        <div class="comment-container relative mt-4 bg-white rounded-xl flex">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
{{--                    <h4 class="text-xl font-semibold">--}}
{{--                        <a href="" class="hover:underline">A random title can go here</a>--}}
{{--                    </h4>--}}
                    <div class="text-gray-600">
                        Add idea form goes here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-black font-bold">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
{{--                            <div>&bull;</div>--}}
{{--                            <div>Category</div>--}}
{{--                            <div>&bull;</div>--}}
{{--                            <div class="text-gray-900">3 Comments</div>--}}
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="rounded-full bg-gray-200 text-xxs font-bold text-center px-4 py-2 w-28 h-7 leading-none uppercase">Open</div>
                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 easy-in px-3">
                                <svg class="w-6 h-6" fill="#d1d5db" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0
                                11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                            </button>
                            <div class="ml-8">
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left">
                                    <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Mark as Spam</a></li>
                                    <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!----end comment-container--->

        <div class="is-admin comment-container relative mt-4 bg-white rounded-xl flex">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="uppercase text-blue text-xxs font-bold text-center mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                     <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title can go here</a>
                     </h4>
                    <div class="text-gray-600 mt-3">
                        Add idea form goes here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-blue font-bold">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            {{--                            <div>&bull;</div>--}}
                            {{--                            <div>Category</div>--}}
                            {{--                            <div>&bull;</div>--}}
                            {{--                            <div class="text-gray-900">3 Comments</div>--}}
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="rounded-full bg-gray-200 text-xxs font-bold text-center px-4 py-2 w-28 h-7 leading-none uppercase">Open</div>
                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 easy-in px-3">
                                <svg class="w-6 h-6" fill="#d1d5db" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0
                                11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                            </button>
                            <div class="ml-8">
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left">
                                    <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Mark as Spam</a></li>
                                    <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!----end comment-container--->

        <div class="comment-container relative mt-4 bg-white rounded-xl flex">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">--}}
                    {{--                        <a href="" class="hover:underline">A random title can go here</a>--}}
                    {{--                    </h4>--}}
                    <div class="text-gray-600">
                        Add idea form goes here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="text-black font-bold">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            {{--                            <div>&bull;</div>--}}
                            {{--                            <div>Category</div>--}}
                            {{--                            <div>&bull;</div>--}}
                            {{--                            <div class="text-gray-900">3 Comments</div>--}}
                        </div>

                        <div class="flex items-center space-x-2">
                            <div class="rounded-full bg-gray-200 text-xxs font-bold text-center px-4 py-2 w-28 h-7 leading-none uppercase">Open</div>
                            <button class="relative bg-gray-100 border hover:bg-gray-200 rounded-full h-7 transition duration-150 easy-in px-3">
                                <svg class="w-6 h-6" fill="#d1d5db" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0
                                11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                            </button>
                            <div class="ml-8">
                                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left">
                                    <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Mark as Spam</a></li>
                                    <li> <a href="#" class="hover:bg-gray-100 transition duration-150 block easy-in px-5 py-3">Delete Post</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!----end comment-container--->
    </div> <!----end comments-container--->

</x-app-layout>
