<x-app-layout>

    <div class="mt-10 text-4xl font-bold text-center">
        Leaderboard 🔥
    </div>

    <div class="text-center text-md text-gray-600 mt-2">
        Here is the most active users in this portal ❤️.
    </div>


    <div class="px-3 md:lg:xl:px-40 py-20 bg-opacity-10">
        <x-card>
            <p class="text-lg text-gray-800 font-bold text-center">HALL OF FAME 🏆 </p>
        </x-card>
        <div class="px-3 md:lg:xl:px-40 py-20 bg-opacity-10">
            <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 ">
                @foreach ($users as $user)
                    @if ($user->forums->count() >= 500)
                        <x-leaderboard-card :user="$user" :careers="$careers" />
                    @endif
                @endforeach
            </div>
        </div>

        <x-card>
            <p class="text-lg text-gray-800 font-bold text-center">COMMUNITY PILLARS 🥈</p>
        </x-card>
        <div class="px-3 md:lg:xl:px-40 py-20 bg-opacity-10">
            <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 ">
                @foreach ($users as $user)
                    @if ($user->forums->count() < 500 && $user->forums->count() >= 200)
                        <x-leaderboard-card :user="$user" :careers="$careers" />
                    @endif
                @endforeach

            </div>
        </div>

        <x-card>
            <p class="text-lg text-gray-800 font-bold text-center">HONORABLE MENTIONS 🥉</p>
        </x-card>

        <div class="px-3 md:lg:xl:px-40 py-20 bg-opacity-10">
            <div class="grid grid-cols-1 md:lg:xl:grid-cols-3 ">
                @foreach ($users as $user)
                    @if ($user->forums->count() < 200 && $user->forums->count() >= 50)
                        <x-leaderboard-card :user="$user" :careers="$careers" />
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</x-app-layout>
