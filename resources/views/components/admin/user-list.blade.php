@props(['users'])

<div class="p-6 bg-white overflow-hidden shadow sm:rounded-lg">
    <div>Users</div>
    <div class="text-right mb-4"><a href="/register" class="text-xs font-bold bg-green-500 uppercase border rounded px-4 py-2">Create User</a></div>
    <div class="text-lg font-normal mt-8 md:mt-5">
        @foreach ($users as $user)
        <div class="flex flex-wrap justify-between even:bg-white odd:bg-gray-100">
            <div class="text-xl">
                <div>{!! $user->name !!}</div>
            </div>
            <div>
                <a href="/admin/user/{{ $user->id }}/edit">Edit <i style='font-size:15px;' class='far'>&#xf044;</i></a>
                <form method="POST" action="/admin/user/{{ $user->id }}/delete" class="inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="text-red-600">Delete <i style='font-size:15px; color:red' class='far'>&#xf2ed;</i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>