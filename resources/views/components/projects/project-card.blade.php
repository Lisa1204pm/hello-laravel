@props(['project'])

<div class="p-6 bg-white overflow-hidden shadow sm:rounded-lg">
    <div>
        <a href="/projects/{{ $project['id'] }}">{{ $project['title'] }}</a>
    </div>
    <div>{{ $project['description'] }}</div>
</div>