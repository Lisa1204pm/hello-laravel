<header class="px-6 py-4 w-full h-fit">
    <nav class="flex justify-between items-end">
        <div>
            <a href="/" class="text-s font-bold uppercase">Home</a>
            <a href="/projects" class="ml-3 text-xs font-bold uppercase">projects</a>
            <a href="/about" class="ml-3 text-xs font-bold uppercase">about</a>
            @if (auth()->user()?->isAdmin())
            <a href="/admin/projects" class="ml-3 text-xs font-bold uppercase">Admin</a>
            @endif
        </div>
        <div class="mt-4 md:mt-0">
            @auth
                <span class="text-xs font-bold uppercase"> HI, {{ auth()->user()->name }} </span>
                <a href="/logout" class="ml-3 text-xs font-bold uppercase">Logout</a>
            @else
                <a href="/login" class="ml-3 text-xs font-bold uppercase">Log In</a>
            @endauth
        </div>
        
    </nav>
</header>