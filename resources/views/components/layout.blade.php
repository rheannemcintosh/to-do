<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Header -->
    <x-head />

    <!-- Body -->
    <body>
    

        <!-- Page Content -->
        <div class="bg-gray-100 page-wrap min-h-screen pb-10">
            <main>

                <!-- Navigation -->
                <x-navigation />

                <!-- Content Container -->
                <div class="container mx-auto w-full pt-20">
                    {{ $slot }}
                </div>

            </main>
        </div>

        <!-- Footer -->
        <x-footer />

    </body>
</html>