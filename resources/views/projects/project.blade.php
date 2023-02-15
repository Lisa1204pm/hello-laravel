<x-layout>
    <x-slot name="content">
        <div class="relative items-top w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-left py-4 sm:pt-0">
            <a href="/projects" class="ml-3 text-xs font-bold uppercase">←Back to Projects</a>
        </div>
        <div class="relative flex items-top justify-center w-full h-full bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="p-6 bg-white w-90vm shadow sm:rounded-lg">
                <a href="/projects/{{ $project['id'] }}">{{ $project['title'] }}</a>
            <p>{{ $project['description'] }}</p>
        </div>
        </div>
    </x-slot>
</x-layout>