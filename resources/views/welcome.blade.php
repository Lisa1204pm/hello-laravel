
<x-layout>
    <x-slot name="content">
        <div class="relative flex flex-wrap items-top justify-center w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="mt-10 text-lg font-bold uppercase text-center">
                <h1>Featured</h1>
            </div>
            <div class="relative flex justify-center w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="mt-6 h-fit">
                <section class="grid grid-cols-1 max-w-5xl md:grid-cols-2 gap-2">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="p-6 bg-white flex flex-col shadow sm:rounded-lg">
                        <div class="text-xl font-bold">
                            <a href="/projects/{{ $projects[$i]->slug }}">{{ $projects[$i]->title }}</a>
                        </div>
                        <div class="text-lg font-normal mt-8 md:mt-5 flex items-center ">
                            @if ($projects[$i]->image)
                            <img src="{{ url('storage/' . $projects[$i]->thumb) }}" alt="project image placeholder" class="w-40 h-40" />
                            @else
                                <img src="{{ url('storage/images/thumbnail.png') }}" alt="project image placeholder" class="max-w-40 max-h-40" />
                            @endif
                            <div >{!! $projects[$i]->excerpt !!}</div>
                        </div>
                    </div>
                    @endfor
                </section>
            </div>
        </div>
            <div class="m-3 text-base font-bold uppercase text-right">
                <a href="/projects">View More Projects →</a>
            </div>
        </div>
    </x-slot>
</x-layout>