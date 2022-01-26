<x-layout>
    <h1 class="font-abril text-7xl mb-6 text-tdTeal">#{{$task->id}}</h1>
    @if($task->complete && isset($task->completed_at))
        <div class="tooltip">
            <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
            <span class="tooltiptext w-full text-2xs bg-white text-gray-600 border border-gray-600">{{ $task->completed_at->format('d M Y') }}</span>
        </div>
    @elseif($task->cancelled_flag)
        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Cancelled</span>
    @elseif($task->never_ending_flag)
        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Never Ending</span>
    @elseif(!$task->started_at)
        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">Not Started</span>
    @else
        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">In Progress</span>
    @endif
    <p class="font-poppins font-black">{{ $task->task }}</p>
    <p class="font-poppins text-sm">{{ $task->description }}</p>
    <div class="py-2">
        @isset ($task->epic)
            <a href="{{ url('/epics/' . $task->epic['id']) }}">
                <span class="bg-pink-100 hover:bg-pink-200 text-pink-600 py-1 px-3 rounded-full">{{ $task->epic['name'] }}</span>
            </a>
        @else
            -
        @endisset
    </div>
    @if ($task->priority == 1)
        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{ $task->priority }}</span>
    @elseif ($task->priority == 2)
        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">{{ $task->priority }}</span>
    @elseif ($task->priority == 3)
        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{ $task->priority }}</span>
    @else
        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">0</span>
    @endif
    <p>Category: {{ $task->category['name'] }} -> {{ $task->subCategory['name']}}</p>
    <p>Due Date: {{ $task->priority }}</p>
    <p>Started At: {{ $task->priority }}</p>
    <p>Completed At: {{ $task->priority }}</p>
    <p>Never Ending Flag: {{ $task->never_ending_flag }}</p>
    <p>Example: {{ $task->example }}</p>
</x-layout>