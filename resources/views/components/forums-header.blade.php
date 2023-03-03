@props(['users'])

<div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-8">
    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">Forum Talk 🗣️</h2>
    <p class="font-light text-gray-500 sm:text-xl text-gray-400">
        The Coding Community portal for problem solving, knowledge sharing and community building. Join
        <span class="text-green-400 font-bold font-italic font-medium text-4xl">{{ $users->count() }}</span> other
        developers.
    </p>
</div>
<div class="mx-auto max-w-screen-xl flex items-center justify-center lg:pb-8 lg:px-6">
    <a href="/forums/forum"
        class="mt-5 text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
        Share your forum
    </a>
</div>
