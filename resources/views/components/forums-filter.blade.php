<div class="flex justify-end mt-10">
    <div class="inline-flex rounded-md" role="group">
        <a href="/forums" type="button"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm
            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-indigo-600">

            Recent
        </a>
        <a href="{{ route('forums.oldest') }}" type="button"
            class="mx-10 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm
            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-indigo-600">

            Oldest
        </a>

        <a href="{{ route('leaderboard') }}" type="button"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm
            hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
            focus-visible:outline-indigo-600">

            Leaderboard
        </a>

    </div>
</div>
