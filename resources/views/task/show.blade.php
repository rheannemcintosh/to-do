<x-layout>
    <h1 class="font-abril text-7xl mb-6 text-tdTeal">{{ $task->task }}</h1>
    <p>ID: {{ $task->id }}</p>
    <p>Description: {{ $task->description }}</p>
    <p>Epic ID: {{ $task->epic_id }}</p>
    <p>Complete: {{ $task->complete }}</p>
    <p>Priority: {{ $task->priority }}</p>
    <p>Category: {{ $task->priority }}</p>
    <p>Sub Category: {{ $task->priority }}</p>
    <p>Due Date: {{ $task->priority }}</p>
    <p>Started At: {{ $task->priority }}</p>
    <p>Completed At: {{ $task->priority }}</p>
    <p>Never Ending Flag: {{ $task->never_ending_flag }}</p>
    <p>Cancelled Flag: {{ $task->cancelled_flag }}</p>
    <p>Example: {{ $task->example }}</p>
</x-layout>