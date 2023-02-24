<x-layout>
    <x-slot name="content">
        <div class="relative w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if ($categoryName)
                <div class="m-3 text-xs font-bold uppercase text-left">
                    <a href="/projects" class="m-3 text-xs font-bold uppercase">←Back to Projects</a>
                </div>
                <div class="mt-10 text-lg font-bold uppercase text-center">{{$categoryName}}</div>
            @elseif($tagName)
                <div class="m-3 text-xs font-bold uppercase text-left">
                    <a href="/projects" class="m-3 text-xs font-bold uppercase">←Back to Projects</a>
                </div>
                <div class="mt-10 text-lg font-bold uppercase text-center">{{$tagName}}</div>
            @else
                <div class="mt-10 text-lg font-bold uppercase text-center">Projects</div>
            @endif
            <div class="relative flex justify-center w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <div class="mt-6 h-fit">
                    <section class="grid grid-cols-1 max-w-5xl md:grid-cols-2 gap-2">
                        @foreach ($projects as $project)
                            <x-projects.project-card :project="$project" />
                        @endforeach
                    </section>
                    @if (count($projects))
                    <div class="text-xs mt-4 w-full text-right">
                        @if($projects instanceof \Illuminate\Pagination\AbstractPaginator)
                            {{ $projects->links() }}
                        @elseif($categoryName)
                            Found {{ count($projects) }} Projects in {{ $categoryName }}
                        @elseif($tagName)
                            Found {{ count($projects) }} Projects in {{ $tagName }}
                        @endif
                    </div>
                    @else
                        <div>Nothing to showcase, yet.</div>
                    @endif
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>