<x-public-layout>
    <div class="bg-tdTeal">
        <h1 class="mt-20 font-abril flex justify-center items-center text-white text-12xl">To Do</h1>
        <h2 class="font-poppins flex justify-center items-center text-white text-5xl">The 'EXTRA' To Do List</h2>
        <h3 class="mt-10 font-poppins flex justify-center items-center text-white text-xl">Coming Soon...</h3>
    </div>
    <div class="text-white p-16">

        <!-- Icon List -->
        <div class="pb-4 text-center">
            <a class="opacity-75 hover:opacity-100 mx-10 text-4xl" href="https://github.com/rheannemcintosh/to-do"><ion-icon name="logo-github"></ion-icon></a>
        </div>

        <!-- Name & Developed Using -->
        <p class="mx-8 text-center font-large">Rheanne McIntosh © {{ now()->year }} | Developed Using Laravel v{{ Illuminate\Foundation\Application::VERSION }}</p>
    </div>

</x-public-layout>