@props(['comment' => $comment])

<div class="bg-gray-700 p-5 rounded-xl mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
    <p class="pb-6 text-white">
        {{ $comment->comment }}
    </p>
    <p class="text-white">
        Commented by <strong class="text-bold text-blue-500"> {{ $comment->user->first_name }} </strong>
        {{ $comment->created_at->diffForHumans() }}
    </p>
</div>
