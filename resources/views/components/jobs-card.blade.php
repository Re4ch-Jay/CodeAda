@props(['career'])

<div id="list" class="flex flex-col items-center justify-center overflow-hidden sm:py-4">
    <div
        class="p-6 bg-gray-100 shadow-xl shadow-gray-100 w-full max-w-4xl flex flex-col sm:flex-row gap-3 sm:items-center justify-between rounded-md">
        <div>
            <span class="text-gray-500 text-sm">{{ $career->created_at->diffForHumans() }}</span> <br>
            <span class="text-purple-800 text-sm">
                <a href="/careers?tags={{ $career->tags }}#list">
                    {{ $career->tags }}
                </a>
            </span>
            <h3 class="font-bold mt-px">
                <a href="/careers?title={{ $career->title }}#list">
                    {{ $career->title }}
                </a>
            </h3>
            <div class="flex items-center gap-3 mt-2">
                <span class="bg-purple-100 text-purple-700 rounded-full px-3 py-1 text-sm">
                    <a href="/careers?job_type={{ $career->job_type }}#list">
                        {{ $career->job_type }}
                    </a>
                </span>
                <span class="text-slate-600 text-sm flex gap-1 items-center"> <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <a href="/careers?location={{ $career->location }}#list">
                        {{ $career->location }}
                    </a>
                </span>
            </div>
        </div>
        <div>
            <a href="{{ route('careers.show', $career) }}"
                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium px-4 py-2 rounded-md flex gap-1 items-center">Read
                More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</div>
