@props(['forum' => $forum])

<x-card>
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <x-forums-tag :tag="$forum->tag" />
        <span class="text-sm">{{ $forum->created_at->diffForHumans() }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
        <a href="/forums?search={{ $forum->title }}">{{ $forum->title }}</a>
    </h2>
    <p class="mb-5 font-light text-gray-500 text-gray-400">
        {{ $forum->description }}
    </p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-1">
            @if ($forum->user->avatar == null)
                <x-no-avatar />
            @else
                <img class="w-10 h-10 rounded-full"
                    src="{{ filter_var($forum->user->avatar, FILTER_VALIDATE_URL) ? $forum->user->avatar : asset('storage/' . $forum->user->avatar) }}"
                    alt="">
            @endif
            <span class="font-medium text-gray-900">
                <a href="{{ route('users.forums', $forum->user) }}">
                    {{ $forum->user->name }}
                </a>
            </span>
            <x-likes_and_comment :likes="$forum->likes" :comments="$forum->comments" />
        </div>
        <a href="/forums/{{ $forum->id }}"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm
            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-indigo-600">
            Read more
        </a>
    </div>
</x-card>
