@props(['project', 'showBody' => false, 'showExcerpt' => true])

<div class="p-6 bg-white flex flex-col h-fit shadow sm:rounded-lg">
    <div class="text-xl font-bold">
        <a href="/projects/{{ $project->slug }}">{{ $project->title }}</a>
    </div>
    @if ($showExcerpt)
        <div class="text-lg font-normal m-8 md:mt-5 flex items-center ">
            @if ($project->image)
            <img src="{{ url('storage/' . $project->thumb) }}" alt="project image placeholder" class="w-40 h-40 mr-5" />
            @else
                <img src="{{ url('storage/images/thumbnail.png') }}" alt="project image placeholder" class="max-w-40 max-h-40 mr-5" />
            @endif
            <div class="ml-4">{!! $project->excerpt !!}</div>
        </div>
    @endif
    @if ($showBody)
        <div class="text-lg font-normal mt-8 md:mt-5">
            @if ($project->image)
            <img src="{{ url('storage/' . $project->image) }}" alt="project image placeholder" class="w-max" />
            @else
                <img src="{{ url('storage/images/main-image.png') }}" alt="project image placeholder" class="w-max" />
            @endif
            <div>{!! $project->body !!}</div>
        </div>
    @endif
    <footer class="mt-8 md:mt-5">
        @if ($project->category)
            <div class="text-m font-normal">Category: <a href="/categories/{{ $project->category->slug }}">{{ $project->category->name }}</a></div>
        @else
            </br>
        @endif
        @if (count($project->tags))
            <div class="text-m font-normal">Tags: 
                @foreach ($project->tags as $tag)
                    <a href="/projects/tags/{{ $tag->slug }}">{{ $tag->name }}</a>
                @endforeach
            </div>
        @endif
    </footer>
</div>