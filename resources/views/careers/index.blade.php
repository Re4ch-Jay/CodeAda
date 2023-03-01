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
                        placeholder="Search..." />
                    <div class="absolute top-2 right-2">
                        @include('partials._button-search')
                    </div>
                </div>
            </form>


            @foreach ($careers as $career)
                <x-jobs-card :career="$career" />
            @endforeach

            <div class="mt-6 p-10">
                {{ $careers->links() }}
            </div>

        </div>
    </section>

</x-app-layout>
