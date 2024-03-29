<x-app-layout>
    <section class="my-10 bg-gray-white">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <form action="/forums/{{ $forum->id }}" method="POST"
                class="p-6 bg-gray-100 rounded-lg border border-gray-200 shadow-md border-gray-700">
                <div>Edit {{ $forum->title }}</div>
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="title" id="title" name="title" value="{{ $forum->title }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">
                    @error('title')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Your
                        Description</label>
                    <textarea type="description" id="description" name="description"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">{{ $forum->description }}</textarea>
                    @error('description')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tag" class="block mb-2 text-sm font-medium text-gray-900">Your
                        Tag</label>
                    <input type="tag" id="tag" name="tag" value="{{ $forum->tag }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500" />
                    @error('tag')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>
   

                <div class="mb-6">
                    <label for="markdown" class="block mb-2 text-sm font-medium text-gray-900">Your body
                        markdown</label>
                    <textarea type="markdown" id="markdown" name="markdown" rows="10"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">{{ $forum->markdown }}</textarea>
                    @error('markdown')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>

                @include('partials._button-update')
            </form>
        </div>
    </section>
</x-app-layout>
