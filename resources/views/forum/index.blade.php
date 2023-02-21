    <x-layout>
        <section class="bg-white">
            <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-8">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900">Forum Talk</h2>
                    <p class="font-light text-gray-500 sm:text-xl text-gray-400">
                        We use an agile approach to test assumptions
                        and connect with the needs of your audience early and often.
                    </p>
                </div>
                <div class="mx-auto max-w-screen-xl flex items-center justify-center lg:pb-8 lg:px-6">
                    <a href="/forums/forum"
                        class="mt-5 text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        Share your forum
                    </a>
                </div>

                <x-search />

           
                <div class="flex justify-end mt-10">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <a href="{{route("forums.oldest")}}" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 bg-gray-700 border-gray-600 text-white hover:text-white hover:bg-gray-600 focus:ring-blue-500 focus:text-white">
                        Popular
                        </a>
                        <a href="/forums"  type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 bg-gray-700 border-gray-600 text-white hover:text-white hover:bg-gray-600 focus:ring-blue-500 focus:text-white">
                        Recent
                        </a>
                        <a href="{{route("forums.oldest")}}"  type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 bg-gray-700 border-gray-600 text-white hover:text-white hover:bg-gray-600 focus:ring-blue-500 focus:text-white">
                        Oldest
                        </a>
                    </div>
                </div>
            

                <div class="my-10 text-gray-900 font-bold sm:text-xl">
                    <a href="/forums">
                        Forums {{ $forums->total() }}
                    </a>
                </div>

                @if ($forums->count())
                    <div class="grid lg:grid-cols-1 mb-5">
                        <x-forums-feature-card :forums="$forums" />
                    </div>
                @endif

                @if ($forums->count())
                    <div class="grid gap-8 lg:grid-cols-2 mb-5">
                        @foreach ($forums->skip(1) as $forum)
                            <x-forums-card :forum="$forum" />
                        @endforeach

                    </div>

                    <div class="mt-6 p-10">
                        {{ $forums->links() }}
                    </div>
                @else
                    <div class="flex items-center justify-center">
                        <p class="text-white text-md-center">There is no post right now come back</p>
                    </div>
                @endif

        </section>

    </x-layout>
