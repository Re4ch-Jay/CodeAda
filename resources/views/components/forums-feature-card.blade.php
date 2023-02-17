@props(['forums' => $forums])

<article class="p-6 bg-gray-700 rounded-lg border border-gray-200 shadow-md bg-gray-800 border-gray-700">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <span
            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-primary-200 text-primary-800">
            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                </path>
            </svg>
            Tutorial
        </span>
        <span class="text-sm">{{ $forums[0]->created_at->diffForHumans() }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-white">
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
            <span class="font-medium text-white">
                {{ $forums[0]->user->first_name }}
            </span>
        </div>
        <a href="/forums/{{ $forums[0]->id }}"
            class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Read more
        </a>
    </div>
</article>
