@props(['tag'])

<span
    class="bg-primary-100 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded bg-primary-200 text-primary-800">
    <a href="/forums/?tag={{ $tag }}">
        {{ $tag }}
    </a>
</span>
