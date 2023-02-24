@props(['projects'])

<div class="p-6 bg-white h-fit shadow sm:rounded-lg">
    <div>Projects</div>
    <div class="text-right mb-4"><a href="/admin/projects/create" class="text-xs font-bold bg-green-500 uppercase border rounded px-4 py-2">Create Project</a></div>
    @foreach ($projects as $project)
        <div class="flex flex-wrap justify-between even:bg-white odd:bg-gray-100">
            <div class="text-xl">
                <a href="/projects/{{ $project->slug }}" target="_blank">{{ $project->title }}</a>
            </div>
            <div>
                <a href="/admin/projects/{{ $project->slug }}/edit">Edit <i style='font-size:15px;' class='far'>&#xf044;</i></a>
                <form method="POST" action="/admin/projects/{{$project->slug}}/delete" class="inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-600">Delete <i style='font-size:15px; color:red' class='far'>&#xf2ed;</i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>