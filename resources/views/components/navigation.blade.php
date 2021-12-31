<nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-20 bg-purple-900 shadow sm:items-baseline w-full text-white">
    <div class="mb-2 sm:mb-0">
        <a href="{{ url('/') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">To Do</a>
    </div>
    <div>
        <a href="{{ url('/today') }}" class="px-4 text-lg no-underline text-grey-darkest hover:bg-purple-300 hover:text-black rounded-lg ml-2">Today</a>
        <a href="{{ url('/epics') }}" class="px-4 text-lg no-underline text-grey-darkest hover:bg-purple-300 hover:text-black rounded-lg ml-2">Epics</a>
        <a href="{{ url('/tasks') }}" class="px-4 text-lg no-underline text-grey-darkest hover:bg-purple-300 hover:text-black rounded-lg ml-2">Tasks</a>
    </div>
</nav>