<x-app-layout>



    <!-- component -->
    <section class="container mx-auto p-6">

        <form id="list" action="/careers/dashboard">
            <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                <input type="text" name="search"
                    class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search..." />
                <div class="absolute top-2 right-2">
                    @include('partials._button-search')
                </div>
            </div>
        </form>



        <div class="my-10 text-gray-900 font-bold sm:text-xl text-center">
            <a href="/careers/dashboard">
                Jobs hiring by {{ auth()->user()->name }} found {{ auth()->user()->careers()->count() }}
            </a>
        </div>

        <a href="{{ route('careers.create') }}"
            class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">Hiring
            new Position</a>

        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Job Title</th>
                            <th class="px-4 py-3">Job Description</th>
                            <th class="px-4 py-3">Job Location</th>
                            <th class="px-4 py-3">Company</th>
                            <th class="px-4 py-3">Website</th>
                            <th class="px-4 py-3">Tags</th>
                            <th class="px-4 py-3">Salary</th>
                            <th class="px-4 py-3">Job Type</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @if (auth()->user()->careers()->count())
                            @foreach ($careers as $career)
                                @if ($career->ownedBy(auth()->user()))
                                    <tr class="text-gray-700">

                                        <td class="px-4 py-3 border">
                                            <a href="/careers/dashboard?search={{ $career->title }}#list">
                                                <p class="font-semibold text-black">{{ $career->title }}</p>
                                            </a>
                                        </td>

                                        <td class="px-4 py-3 text-ms font-semibold border">
                                            {{ Str::limit($career->description, 10) }}
                                        </td>

                                        <td class="px-4 py-3 text-ms border">
                                            <a href="/careers/dashboard?search={{ $career->location }}#list"
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                {{ $career->location }}
                                            </a>
                                        </td>

                                        <td class="px-4 py-3 text-sm border">
                                            <a href="/careers/dashboard?search={{ $career->company_name }}#list">
                                                {{ $career->company_name }}
                                            </a>
                                        </td>

                                        <td class="px-4 py-3 text-ms border">{{ $career->website }}</td>
                                        <td class="px-4 py-3 text-ms border">
                                            <a href="/careers/dashboard?search={{ $career->tags }}#list">
                                                {{ $career->tags }}
                                            </a>
                                        </td>
                                        <td class="px-4 py-3 text-ms border">
                                            @if (empty($career->salary))
                                                <p>Negotiate</p>
                                            @else
                                                <a href="/careers/dashboard?search={{ $career->salary }}#list">
                                                    ${{ $career->salary }}
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 text-ms border">
                                            <a href="/careers/dashboard?search={{ $career->job_type }}#list">
                                                {{ $career->job_type }}
                                            </a>
                                        </td>
                                        <td class="px-4 py-3 text-ms border flex justify-between items-center">
                                            <a href="{{ route('careers.edit', $career) }}"
                                                class="mr-1 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit</a>
                                            <a href="{{ route('careers.show', $career) }}"
                                                class="mr-1 inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">View
                                            </a>

                                            <form action="{{ route('careers.destroy', $career) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button>Delete</x-danger-button>
                                            </form>
                                        </td>
                                    </tr>
                                    </a>
                                @endif
                            @endforeach
                        @endif

                    </tbody>
                </table>

            </div>

        </div>
        @if (auth()->user()->careers()->count() > 15)
            <div>
                {{ $careers->links() }}
            </div>
        @endif

    </section>
</x-app-layout>
