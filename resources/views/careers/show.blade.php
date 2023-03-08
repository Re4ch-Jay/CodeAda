<x-app-layout>
    <div class="my-20">
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 24em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="https://cpqi.com/wp-content/uploads/Remote-Software-Developer-Jobs-in-Canada.jpg"
                class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <div class="px-4 py-1 bg-black text-gray-200 inline-flex items-center justify-center mb-2">

                    <span
                        class="bg-primary-100 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-primary-200 text-primary-800">
                        <a href="/careers/?tags={{ $career->tags }}">
                            {{ $career->tags }}
                        </a>
                    </span>

                </div>
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    {{ $career->title }}
                </h2>
                <div class="flex mt-3">
                    @if ($career->user->avatar == null)
                        <x-no-avatar />
                    @else
                        <img class="w-10 h-10 rounded-full"
                            src="{{ filter_var($career->user->avatar, FILTER_VALIDATE_URL) ? $career->user->avatar : asset('storage/' . $career->user->avatar) }}"
                            alt="">
                    @endif

                    <div>
                        <p class="ml-2 font-semibold text-gray-200 text-sm">
                            <a href="{{ route('users.forums', $career->user) }}">
                                {{ $career->user->name }}
                            </a>
                        </p>
                        <p class="ml-2  font-semibold text-gray-400 text-xs"> {{ $career->created_at->diffForHumans() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 lg:px-0 mt-12 text-gray-900 max-w-screen-md mx-auto text-lg leading-relaxed">
            <a href="https://{{ $career->website }}"
                class="bg-indigo-600  hover:bg-indigo-600 text-white font-medium px-4 py-2 rounded-md text-center mb-5">
                Apply Now
            </a>

            <div class="text-lg font-bold mb-1 mt-10">Location</div>
            <p class="pb-6">{{ $career->location }}</p>
            <div class="text-lg font-bold mb-1">Job Type</div>
            <p class="pb-6">{{ $career->job_type }}</p>
            <div class="text-lg font-bold mb-1">Salary</div>
            @if (empty($career->salary))
                <p class="pb-6">Negotiate</p>
            @else
                <p class="pb-6">${{ $career->salary }}</p>
            @endif
            <div class="text-lg font-bold mb-1">Job Description</div>
            <p class="pb-6">{{ $career->description }}</p>

            <div class="text-lg font-bold mb-1">Webiste</div>
            <p class="pb-6 text-blue-400">{{ $career->website }}</p>

        </div>
    </div>
    </main>
</x-app-layout>
