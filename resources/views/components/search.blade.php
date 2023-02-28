<form action="/forums/">
    <div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
            placeholder="Search..." />
        <div class="absolute top-2 right-2">
            @include('partials._button-search')
        </div>
    </div>
</form>
