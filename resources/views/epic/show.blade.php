<x-layout>
    <div class="">
        @isset($epic)
            <div class="mb-6">
                <h2 class="font-abril text-7xl mb-6">{{ $epic->name }}</h2>
                <p class="font-poppins">{{ $epic->description }}</p>
            </div>
            <p class="font-poppins"><span class="font-extrabold">Start Date:</span> {{ $epic->started_at }}</p>
            <p class="font-poppins"><span class="font-extrabold">End Date:</span> {{ $epic->completed_at }}</p>
            <p class="font-poppins"><span class="font-extrabold">Never Ending Task:</span> @if($epic->never_ending_task) True @else False @endif</p>
            <div class="mt-6">
                <h3 class="font-abril text-2xl">Related Tasks:</h3>
            </div>
        @endisset
    </div>
</x-layout>