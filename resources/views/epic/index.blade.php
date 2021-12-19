<x-layout>
    <div class="p-8">
        <h1 class="text-4xl mb-4">Epics</h1>
        <div class="grid grid-cols-10 bg-gray-400 p-2 text-center font-bold">
            <p>ID</p>
            <p class="col-span-2">Name</p>
            <p class="col-span-3">Description</p>
            <p>Started</p>
            <p>Completed</p>
            <p>Edit</p>
            <p>Delete</p>
        </div>
        <div class="grid grid-cols-10 p-2 border-2 border-gray-400 text-center">
            @foreach($epics as $epic)
                <p class="p-1 font-bold">{{ $epic->id }}</p>
                <p class="p-1 col-span-2">{{ $epic->name }}</p>
                <p class="p-1 col-span-3 text-sm text-left">This is a test description and will be updated in due course.</p>
                <p class="p-1 text-sm">{{ $epic->created_at }}</p>
                <p class="p-1 text-sm">Completed!</p>
                <button class="h-8 px-4 m-2 mx-8 text-sm text-white bg-green-600 rounded-lg focus:shadow-outline hover:bg-green-800">Edit</button>
                <button class="h-8 px-4 m-2 mx-8 text-sm text-white bg-red-600 rounded-lg focus:shadow-outline hover:bg-red-800">Delete</button>
            @endforeach
        </div>

    </div>
</x-layout>