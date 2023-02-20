@props(['forum' => $forum])

<section class="py-8 lg:py-16">
    <div class="max-w-2xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 text-gray-900">Discussion
                ({{ $forum->comments->count() }})</h2>
        </div>
        <form action="{{ route('forums.comment', $forum->id) }}" class="mb-6" method="POST">
            @csrf
            <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-gray-100 border-gray-700">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea id="comment" name="comment" rows="6"
                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none text-gray-900 placeholder-gray-600 bg-gray-100"
                    placeholder="Write a comment..."></textarea>
            </div>
            <button type="submit"
                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-gray-900 bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 focus:ring-primary-900 hover:bg-primary-800">
                Post comment
            </button>
        </form>
    </div>
</section>
