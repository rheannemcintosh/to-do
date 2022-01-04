<x-layout>
    <div class="p-8">
        <h1 class="font-abril text-4xl mb-4">Tasks</h1>
        @if(Session::has('message'))
            <div class="py-2 px-4 rounded-lg mb-2 text-white {{ Session::get('background')}} ">
                {{ Session::get('message')}}
            </div>
        @endif
        <div class="grid grid-cols-16 bg-gray-400 p-2 text-center font-bold">
            <p>ID</p>
            <p class="col-span-2">Name</p>
            <p class="">Complete</p>
            <p class="">Priority</p>
            <p class="">Epic</p>
            <p class="col-span-3">Description</p>
            <p>Category</p>
            <p>Sub-Category</p>
            <p>Due Date</p>
            <p>Started</p>
            <p>Completed</p>
            <p>Edit</p>
            <p>Delete</p>
        </div>
        <div class="font-poppins grid gap-y-4 grid-cols-16 p-2 border-2 border-gray-400 text-center flex items-center justify-center">
            @foreach($tasks as $task)
                <p class="p-1 font-bold">{{ $task->id }}</p>
                <p class="p-1 col-span-2">{{ $task->task }}</p>
                <p class="p-1 font-bold">{{ $task->complete }}</p>
                <p class="p-1 font-bold">{{ $task->priority }}</p>
                <p class="p-1 font-bold">{{ $task->epic_id }}</p>
                <p class="p-1 col-span-3 text-sm text-left">{{ $task->description }}</p>
                <p class="p-1 font-bold">{{ $task->category_id }}</p>
                <p class="p-1 font-bold">{{ $task->sub_category_id }}</p>
                @if($task->never_ending_flag)
                    <div class="text-sm bg-gray-200 rounded-lg p-1 col-span-3">
                        <p>Never Ending Task!</p>
                    </div>
                @else
                    <p class="p-1 text-sm">{{ $task->due_date }}</p>
                    <p class="p-1 text-sm">{{ $task->started_at }}</p>
                    <p class="p-1 text-sm">{{ $task->completed_at }}</p>
                @endif
                <button class="h-8 px-4 m-2 mx-8 text-sm text-white bg-green-600 rounded-lg focus:shadow-outline hover:bg-green-800">Edit</button>
                <form method="post" action="">
                    @csrf
                    @method('DELETE')
                    <button class="h-8 px-4 m-2 mx-8 text-sm text-white bg-red-600 rounded-lg focus:shadow-outline hover:bg-red-800">Delete</button>
                </form>
            @endforeach
        </div>

    </div>
</x-layout>