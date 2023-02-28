<x-app-layout>
    <section class="my-10 bg-gray-white">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <form action="{{ route('forums.comment', $comment) }}" class="mb-6" method="POST">
                @csrf
                @method('PUT')
                <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-gray-100 border-gray-700">
                    <label for="comment" class="sr-only">Your comment</label>
                    <textarea id="comment" name="comment" rows="6"
                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none text-gray-900 placeholder-gray-600 bg-gray-100"
                        placeholder="Write a comment...">{{ $comment->comment }}</textarea>
                </div>
                @error('comment')
                    <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                @enderror
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-gray-900 bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 focus:ring-primary-900 hover:bg-primary-800">
                    Update comment
                </button>
            </form>
        </div>
    </section>
</x-app-layout>
