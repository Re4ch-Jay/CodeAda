<x-layout>
    <section class="my-10 bg-gray-900">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <form action="/forums/post" method="POST" class="p-6 bg-gray-700 rounded-lg border border-gray-200 shadow-md bg-gray-800 border-gray-700">
                @csrf
                <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="title" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" >
                @error('title')
                    <div class="text-red-400 font-bold text-xs">{{$message}}</div>
                @enderror
                </div>

               

                <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Description</label>
                <textarea type="description" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                    @error('description')
                        <div class="text-red-400 font-bold text-xs">{{$message}}</div>
                    @enderror
                </div>


                <div class="mb-6">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your body markdown</label>
                    <textarea type="body" id="body" name="body" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
                    @error('body')
                        <div class="text-red-400 font-bold text-xs">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post</button>
            </form>
        </div>
    </section>
</x-layout>
