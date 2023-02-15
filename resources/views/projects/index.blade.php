<x-layout>
    <x-slot name="content">
        <div class="relative flex justify-center w-full h-full bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="mt-6">
                <section class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    @foreach ($projects as $project)
                        <x-projects.project-card :project="$project" />
                    @endforeach
                </section>
                @if (count($projects))
                <div class="text-sm w-full text-right">{{ count($projects) }} projects to peep.</div>
                @else
                <div>Nothing to showcase, yet.</div>
                @endif
            </div>
        </div>
    </x-slot>
</x-layout>