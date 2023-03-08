@props(['forums' => $forums])

<x-card>
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <x-forums-tag :tag="$forums[0]->tag" />
        <span class="text-sm">{{ $forums[0]->created_at->diffForHumans() }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
        <a href="/forums?search={{ $forums[0]->title }}">{{ $forums[0]->title }}</a>
    </h2>
    <p class="mb-5 font-light text-gray-500 text-gray-400">
        {{ $forums[0]->description }}
    </p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            @if ($forums[0]->user->avatar == null)
                <x-no-avatar />
            @else
                <img class="w-10 h-10 rounded-full" src="{{ $forums[0]->user->avatar }}" />
            @endif
            <span class="font-medium text-gray-900">
                <a href="{{ route('users.forums', $forums[0]->user) }}">
                    {{ $forums[0]->user->name }}
                </a>
            </span>

            <x-likes_and_comment :likes="$forums[0]->likes" :comments="$forums[0]->comments" />
        </div>
        <a href="/forums/{{ $forums[0]->id }}"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm
            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-indigo-600">
            Read more
        </a>
    </div>
</x-card>
