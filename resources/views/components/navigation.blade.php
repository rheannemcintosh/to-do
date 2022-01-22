<nav class="fixed z-50 mb-10 flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-20 bg-tdTeal shadow sm:items-baseline w-full text-white">
    <div class="font-abril mb-2 sm:mb-0">
        <a href="{{ url('/') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">To Do</a>
    </div>
    <div class="font-poppins">
        <a href="{{ url('/today') }}" class="px-4 text-md no-underline text-grey-darkest hover:bg-tdTeal-dark rounded-lg ml-2">TODAY</a>
        <a href="{{ url('/epics') }}" class="px-4 text-md no-underline text-grey-darkest hover:bg-tdTeal-dark rounded-lg ml-2">EPICS</a>
        <a href="{{ url('/tasks') }}" class="px-4 text-md no-underline text-grey-darkest hover:bg-tdTeal-dark rounded-lg ml-2">TASKS</a>
    </div>
</nav>