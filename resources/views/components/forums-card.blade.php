@props(['forum' => $forum])

<x-card>
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <x-forums-tag :tag="$forum->tag" />
        <span class="text-sm">{{ $forum->created_at->diffForHumans() }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
        <a href="#">{{ $forum->title }}</a>
    </h2>
    <p class="mb-5 font-light text-gray-500 text-gray-400">
        {{ $forum->description }}
    </p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <img class="w-7 h-7 rounded-full"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                alt="Jese Leos avatar" />
            <span class="font-medium text-gray-900">
                {{ $forum->user->name }}
            </span>
            <x-likes_and_comment :likes="$forum->likes" :comments="$forum->comments" />
        </div>
        <a href="/forums/{{ $forum->id }}"
            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Read more
        </a>
    </div>
</x-card>
