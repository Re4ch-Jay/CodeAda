@props(['forums' => $forums])

<div class="grid gap-8 lg:grid-cols-2 mb-5">
    <x-card>
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <x-forums-tag :tag="$forums[0]->tag" />
            <span class="text-sm">{{ $forums[0]->created_at->diffForHumans() }}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            <a href="#">{{ $forums[0]->title }}</a>
        </h2>
        <p class="mb-5 font-light text-gray-500 text-gray-400">
            {{ $forums[0]->description }}
        </p>
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img class="w-7 h-7 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                    alt="Jese Leos avatar" />
                <span class="font-medium text-gray-900">
                    {{ $forums[0]->user->name }}
                </span>
                <x-likes_and_comment :likes="$forums[0]->likes" :comments="$forums[0]->comments" />
            </div>
            <a href="/forums/{{ $forums[0]->id }}"
                class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Read more
            </a>
        </div>
    </x-card>
    <x-card>
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <x-forums-tag :tag="$forums[1]->tag" />
            <span class="text-sm">{{ $forums[1]->created_at->diffForHumans() }}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
            <a href="#">{{ $forums[1]->title }}</a>
        </h2>
        <p class="mb-5 font-light text-gray-500 text-gray-400">
            {{ $forums[1]->description }}
        </p>
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <img class="w-7 h-7 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                    alt="Jese Leos avatar" />
                <span class="font-medium text-gray-900">
                    {{ $forums[1]->user->name }}
                </span>

                <x-likes_and_comment :likes="$forums[1]->likes" :comments="$forums[1]->comments" />
            </div>
            <a href="{{ $forums[1]->id }}"
                class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Read more
            </a>
        </div>
    </x-card>
</div>
