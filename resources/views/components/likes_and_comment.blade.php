@props(['likes', 'comments'])
<div class="flex">
    <div class="mx-10">Likes {{$likes->count()}}</div>
    <div>Comment {{$comments->count()}}</div>
</div>