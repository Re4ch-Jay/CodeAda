<x-app-layout>
    <section class="my-10 bg-gray-white">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <form action="/forums/forum" method="POST"
                class="p-6 bg-gray-100 rounded-lg border border-gray-200 shadow-md border-gray-700">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input type="title" id="title" name="title" value="{{ old('title') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">
                    @error('title')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Your
                        Description</label>
                    <textarea type="description" id="description" name="description"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tag" class="block mb-2 text-sm font-medium text-gray-900">Your
                        Tag</label>
                    <input type="tag" id="tag" name="tag" value="{{ old('tag') }}"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500" />
                    @error('tag')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Your body
                        markdown</label>
                    <textarea type="body" id="body" name="body" rows="10"
                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-600 placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500">{{ old('body') }}</textarea>
                    @error('body')
                        <div class="text-red-400 font-bold text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-blue-700 text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Post</button>
            </form>
        </div>
    </section>
</x-app-layout>
