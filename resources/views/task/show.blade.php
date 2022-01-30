<x-layout>
    <h1 class="font-abril text-7xl mb-6 text-tdTeal">#{{$task->id}}</h1>
    @if ($task->priority == 1)
        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-sm">{{ $task->priority }}</span>
    @elseif ($task->priority == 2)
        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-sm">{{ $task->priority }}</span>
    @elseif ($task->priority == 3)
        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-sm">{{ $task->priority }}</span>
    @else
        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-sm">0</span>
    @endif

    @if ($task->complete && isset($task->completed_at))
        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-sm">Completed</span>
    @elseif ($task->cancelled_flag)
        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-sm">Cancelled</span>
    @elseif ($task->never_ending_flag)
        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-sm">Never Ending</span>
    @elseif (!$task->started_at)
        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-sm">Not Started</span>
    @else
        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">In Progress</span>
    @endif
    <div class="mb-6">
        <p class="mt-6 font-poppins font-black">{{ $task->task }}</p>
        <p class="font-poppins text-sm">{{ $task->description }}</p>
    </div>
    <div class="mb-6">
        @isset ($task->epic)
            <a href="{{ url('/epics/' . $task->epic['id']) }}">
                <span class="bg-pink-100 hover:bg-pink-200 text-pink-600 py-1 px-3 rounded-full text-sm">{{ $task->epic['name'] }}</span>
            </a>
            <span>-></span>
        @endisset
        @isset ($task->category['name'])
            <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-sm font-poppins">{{ $task->category['name'] }}</span>
        @endisset
        @isset($task->subCategory['name'])
            <span>-></span>
            <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-sm font-poppins">{{ $task->subCategory['name'] }}</span>
        @endisset
    </div>
    <div class="mb-6">
        @isset ($task->due_date)
            <p class="font-poppins"><span class="font-black">Due Date: </span>{{ $task->due_date->format('d M Y') }}</p>
        @endisset
        @isset ($task->started_at)
            <p class="font-poppins"><span class="font-black">Started: </span>{{ $task->started_at->format('d M Y') }}</p>
        @endisset
        @isset ($task->completed_at)
            <p class="font-poppins"><span class="font-black">Completed: </span>{{ $task->completed_at->format('d M Y') }}</p>
        @endisset
    </div>
</x-layout>