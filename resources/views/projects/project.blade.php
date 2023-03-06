<x-layout>
    <x-slot name="content">
        <div class="relative items-top w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-left">
            <a href="/projects" class="m-3 text-xs font-bold uppercase">←Back to Projects</a>
        </div>
        <div class="p-6 min-w-full bg-gray-100 shadow sm:rounded-lg">
            <div class="text-xl font-bold">
                <x-projects.project-card :project="$project" :showBody="true" :showExcerpt="false"/>
                <!-- <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
            </div>
            <div>{{ $project->excerpt }}</div>
            <div>{{ $project->body }}
                 -->
            </div>
        </div>
    </x-slot>
</x-layout>