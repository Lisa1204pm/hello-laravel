<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<x-layout>
    <x-slot name="content">
        <div class="relative flex flex-wrap w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="mt-5 text-lg text-center w-full">ADMIN</div>
        </div>
        <div class="relative flex justify-center w-full h-fit bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="mt-6 w-4/6">
                <section class="grid grid-cols-1 md:grid-cols-1 gap-2">
                    <div>
                        <x-admin.project-card :projects="$projects" />
                    </div>
                    <div>
                        <x-admin.categories-list :categories="$categories" />
                    </div>
                    <div>
                        <x-admin.tags-list :tags="$tags" />
                    </div>
                    <div>
                        <x-admin.user-list :users="$users" />
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
</x-layout>