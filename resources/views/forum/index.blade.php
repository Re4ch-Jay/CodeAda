<x-app-layout>

    <section class="bg-white">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <x-forums-header :users="$users" />

            <x-search />

            <x-forums-filter />

            <div class="my-10 text-gray-900 font-bold sm:text-xl">
                <a href="/forums">
                    Forums found {{ $forums->total() }}
                    @if (!empty($search))
                        {{ $search }}
                    @endif
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
</x-app-layout>
