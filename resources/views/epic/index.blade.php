<x-layout>
    <div class="p-8">
        <h1 class="text-4xl mb-4">Epics</h1>
        @if(Session::has('message'))
            <div class="py-2 px-4 rounded-lg mb-2 text-white {{ Session::get('background')}} ">
                {{ Session::get('message')}}
            </div>
        @endif
        <div class="grid grid-cols-10 bg-gray-400 p-2 text-center font-bold">
            <p>ID</p>
            <p class="col-span-2">Name</p>
            <p class="col-span-3">Description</p>
            <p>Started</p>
            <p>Completed</p>
            <p>Edit</p>
            <p>Delete</p>
        </div>
        <div class="grid gap-y-4 grid-cols-10 p-2 border-2 border-gray-400 text-center flex items-center justify-center">
            @foreach($epics as $epic)
                <p class="p-1 font-bold">{{ $epic->id }}</p>
                <p class="p-1 col-span-2">{{ $epic->name }}</p>
                <p class="p-1 col-span-3 text-sm text-left">{{ $epic->description }}</p>
                @if($epic->never_ending_flag)
                    <div class="text-sm bg-gray-200 rounded-lg p-1 col-span-2">
                        <p>Never Ending Task!</p>
                    </div>
                @else
                    <p class="p-1 text-sm">{{ $epic->started_at }}</p>
                    <p class="p-1 text-sm">@if (!$epic->started_at && $epic->completed_at == 'Ongoing!') @else {{ $epic->completed_at }} @endif</p>
                @endif
                <button class="h-8 px-4 m-2 mx-8 text-sm text-white bg-green-600 rounded-lg focus:shadow-outline hover:bg-green-800">Edit</button>
                <form method="post" action="{{ route('epics.destroy', $epic->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="h-8 px-4 m-2 mx-8 text-sm text-white bg-red-600 rounded-lg focus:shadow-outline hover:bg-red-800">Delete</button>
                </form>
            @endforeach
        </div>

    </div>
</x-layout>