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
                        @if ($forums->count() == 0)
                            did not found
                        @endif
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
            @endif
            @if ($forums->count() == 0)
                <div class="flex flex-col jutify-center items-center">
                    <strong>Search suggestions:</strong>
                    <ul>
                        <li class="list-disc">Try more general keywords</li>
                        <li class="list-disc">Check your spelling</li>
                        <li class="list-disc">Replace abbreviations with the entire word</li>
                    </ul>
                </div>
            @endif


    </section>
</x-app-layout>
