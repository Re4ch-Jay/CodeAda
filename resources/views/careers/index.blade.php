<x-app-layout>

    @include('partials._hero')
    <section class="bg-white">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <section id="sponsor">

            </section>

            <form action="/careers/">
                <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                    <input type="text" name="search"
                        class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Search for location, job title, job type, salary...." />
                    <div class="absolute top-2 right-2">
                        @include('partials._button-search')
                    </div>
                </div>
            </form>

            <div id="count" class="my-10 text-gray-900 font-bold sm:text-xl text-center">
                <a href="/careers#count">
                    Job listing found {{ $careers->total() }}
                    @if (!empty($search))
                        with
                        {{ $search }}
                        @if ($careers->count() == 0)
                            did not found
                        @endif
                    @endif
                </a>
            </div>


            @foreach ($careers as $career)
                <x-jobs-card :career="$career" />
            @endforeach


            @if ($careers->count() == 0)
                <div class="flex flex-col jutify-center items-center">
                    <strong>Search suggestions:</strong>
                    <ul>
                        <li class="list-disc">Try more general keywords</li>
                        <li class="list-disc">Check your spelling</li>
                        <li class="list-disc">Replace abbreviations with the entire word</li>
                    </ul>
                </div>
            @endif

            <div class="mt-6 p-10">
                {{ $careers->links() }}
            </div>

        </div>
    </section>

</x-app-layout>
