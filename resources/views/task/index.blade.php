<x-layout>
    <h1 class="font-abril text-7xl mb-6 text-tdTeal">Task Overview</h1>
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="font-poppins min-w-max w-full table-auto text-sm">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-4 text-center">ID</th>
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-center">Priority</th>
                                <th class="py-3 px-6 text-center">Epic</th>
                                <th class="py-3 px-6 text-center">Category</th>
                                <th class="py-3 px-6 text-center">Sub-Category</th>
                                <th class="py-3 px-6 text-center">Due Date</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Started</th>
                                <th class="py-3 px-6 text-center">Settings</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach($tasks as $task)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-4 text-center">{{ $task->id }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">{{ $task->task }}</td>
                                <td class="py-3 px-6 text-center">
                                    @if ($task->priority == 1)
                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">{{ $task->priority }}</span>
                                    @elseif ($task->priority == 2)
                                        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">{{ $task->priority }}</span>
                                    @elseif ($task->priority == 3)
                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">{{ $task->priority }}</span>
                                    @else
                                        <span class="bg-gray-200 text-gray-600 py-1 px-3 rounded-full text-xs">0</span>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    @isset ($task->epic)
                                        <a href="{{ url('/epics/1') }}">
                                            <span class="bg-pink-100 hover:bg-pink-200 text-pink-600 py-1 px-3 rounded-full text-xs">{{ $task->epic['name'] }}</span>
                                        </a>
                                    @else
                                        -
                                    @endisset
                                </td>
                                <td class="py-3 px-6 text-left text-xs whitespace-nowrap">{{ $task->category['name'] }}</td>
                                <td class="py-3 px-6 text-left text-xs whitespace-nowrap">{{ $task->subCategory['name']}}</td>
                                <td class="py-3 px-6 text-center text-xs whitespace-nowrap">
                                    @isset($task->due_date){{ $task->due_date->format('d M Y') }} @else - @endisset
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @if($task->complete)
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
                                </td>
                                <td class="py-3 px-6 text-center text-xs whitespace-nowrap">
                                    @isset($task->started_at){{ $task->started_at->format('d M Y') }} @else - @endisset
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-tdTeal hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-tdTeal hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-tdTeal hover:scale-110">
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