<x-app-layout>



    <!-- component -->
    <section class="container mx-auto p-6">

        <form action="/careers/dashboard">
            <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                <input type="text" name="search"
                    class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search..." />
                <div class="absolute top-2 right-2">
                    @include('partials._button-search')
                </div>
            </div>
        </form>

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
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @if ($careers->count())
                            @foreach ($careers as $career)
                                @if ($career->ownedBy(auth()->user()))
                                    <tr class="text-gray-700">

                                        <td class="px-4 py-3 border">
                                            <p class="font-semibold text-black">{{ $career->title }}</p>
                                        </td>

                                        <td class="px-4 py-3 text-ms font-semibold border">
                                            {{ Str::limit($career->description, 10) }}
                                        </td>

                                        <td class="px-4 py-3 text-ms border">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                {{ $career->location }} </span>
                                        </td>

                                        <td class="px-4 py-3 text-sm border">{{ $career->company_name }}</td>

                                        <td class="px-4 py-3 text-ms border">{{ $career->website }}</td>
                                        <td class="px-4 py-3 text-ms border">{{ $career->tags }}</td>
                                        <td class="px-4 py-3 text-ms border">{{ $career->salary }}</td>
                                        <td class="px-4 py-3 text-ms border">
                                            <a href="{{ route('careers.create') }}">Post</a>
                                            <a href="{{ route('careers.edit', $career) }}">Edit</a>

                                            <form action="{{ route('careers.destroy', $career) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        @endif

                    </tbody>
                </table>

            </div>

        </div>
        @if ($careers->count())
            <div>
                {{ $careers->links() }}
            </div>
        @endif

    </section>
</x-app-layout>
