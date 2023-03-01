<x-app-layout>
    <section class="my-10 bg-gray-white">
        <div class="py-2 px-4 mx-auto max-w-screen-xl lg:pt-8 lg:px-6">
            <div class="w-full md:max-w-full mx-auto">
                <div class="p-6 border border-gray-300 sm:rounded-md">
                    <form action="{{ route('careers.update', $career) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label class="block mb-6">
                            <span class="text-gray-700">Job Title</span>
                            <input name="title" type="text" value="{{ $career->title }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="Backend Developer" />
                            @error('title')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>
                        <label class="block mb-6">
                            <span class="text-gray-700">Job Location</span>
                            <input name="location" type="text" value="{{ $career->location }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="Phnom Penh, Cambodia" />
                            @error('location')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>


                        <label class="block
                                mb-6">
                            <span class="text-gray-700">Company Name</span>
                            <input name="company_name" type="text" value="{{ $career->company_name }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="Google" />
                            @error('company_name')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="block mb-6">
                            <span class="text-gray-700">Website (Optional)</span>
                            <input name="website" type="text" value="{{ $career->website }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="www.example.com " />
                            @error('website')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="block mb-6">
                            <span class="text-gray-700">Job Description</span>
                            <textarea name="description"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                rows="3" placeholder="Description">{{ $career->description }}</textarea>
                            @error('description')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="block
                                mb-6">
                            <span class="text-gray-700">Tags</span>
                            <input name="tags" type="text" value="{{ $career->tags }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="Backend Developer" />
                            @error('tags')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="block
                                mb-6">
                            <span class="text-gray-700">Job Type</span>
                            <input name="job_type" type="text" value="{{ $career->job_type }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="Full-Time" />
                            @error('job_type')
                                <div class="text-red-400 font-bold text-xs mt-2">{{ $message }}</div>
                            @enderror
                        </label>

                        <label class="block
                                mb-6">
                            <span class="text-gray-700">Salary Currency $ (Optional)</span>
                            <input name="salary" type="number" value="{{ $career->salary }}"
                                class="
                          block
                          w-full
                          mt-1
                          border-gray-300
                          rounded-md
                          shadow-sm
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        "
                                placeholder="$1000" />

                        </label>

                        <label class="block mb-6">
                            <span class="text-gray-700">Your Company Logo (Optional)</span>
                            <input name="logo" type="file"
                                class="
                          block
                          w-full
                          mt-1
                          focus:border-indigo-300
                          focus:ring
                          focus:ring-indigo-200
                          focus:ring-opacity-50
                        " />
                        </label>
                        @include('partials._button-update')
                    </form>
                </div>
            </div>
        </div>

    </section>
</x-app-layout>
