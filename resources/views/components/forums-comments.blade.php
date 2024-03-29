@props(['comment' => $comment])

<article class="p-6 mb-6 text-base bg-white rounded-lg bg-gray-100 ">
    <div class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm text-gray-900 text-gray-900 font-bold"><img
                    class="mr-2 w-6 h-6 rounded-full" src="{{ filter_var($comment->user->avatar, FILTER_VALIDATE_URL) ? $comment->user->avatar : asset('storage/' . $comment->user->avatar) }}"
                    alt="Michael Gough">{{ $comment->user->name }} </p>
            <p class="text-sm text-gray-600 text-gray-900"><time pubdate datetime="2022-02-08"
                    title="February 8th, 2022">{{ $comment->created_at->diffForHumans() }}</time></p>
        </div>
        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 bg-gray-100 hover:bg-gray-700
            focus:ring-gray-600"
            type="button">
        </button>
    </div>
    <p class="text-gray-500 text-gray-900">{{ $comment->comment }}</p>

    @auth
        @if ($comment->ownedBy(auth()->user()))
            <section class="flex justify-between items-center">
                <form action="{{ route('forums.comment.destroy', $comment) }}" method="POST"
                    class="flex items-center mt-4 space-x-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="flex items-center text-sm text-gray-500 hover:underline text-gray-900">
                        <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                        Delete
                    </button>
                </form>

                <a href="{{ route('forums.comment.edit', $comment) }}" type="submit"
                    class="flex items-center text-sm text-gray-500 hover:underline text-gray-900">
                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                    Edit
                </a>
            </section>
        @endif
    @endauth
</article>
