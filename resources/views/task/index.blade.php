<x-layout>
    <h1 class="font-abril text-7xl mb-6 text-tdTeal">Task Overview</h1>
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="font-poppins min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-4 text-center">ID</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Priority</th>
                                <th class="py-3 px-6 text-left">Epic</th>
                                <th class="py-3 px-6 text-left">Category</th>
                                <th class="py-3 px-6 text-left">Sub-Category</th>
                                <th class="py-3 px-6 text-left">Due Date</th>
                                <th class="py-3 px-6 text-left">Started</th>
                                <th class="py-3 px-6 text-left">Completed</th>
                                <th class="py-3 px-6 text-left">Status</th>
                                <th class="py-3 px-6 text-left">Settings</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach($tasks as $task)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-4 text-center">{{ $task->id }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $task->task }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $task->priority }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $task->epic_id }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $task->category_id }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $task->sub_category_id }}</td>
                                @if($task->never_ending_flag)
                                    <td colspan="3" class="py-3 px-6 text-center whitespace-nowrap">Never Ending Task</td>
                                @else
                                    <td class="py-3 px-6 text-left whitespace-nowrap">@isset($task->due_date){{ $task->due_date->format('d M Y') }}@endisset</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">@isset($task->started_at){{ $task->started_at->format('d M Y') }}@endisset</td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">@isset($task->completed_at){{ $task->completed_at->format('d M Y') }}@endisset</td>
                                @endif
                                @if($task->complete)
                                    <td class="py-3 px-6 text-center">
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completed</span>
                                    </td>
                                @elseif($task->cancelled_flag)
                                    <td class="py-3 px-6 text-center">
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Cancelled</span>
                                    </td>
                                @else
                                    <td class="py-3 px-6 text-center">
                                        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">In Progress</span>
                                    </td>
                                @endif
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>