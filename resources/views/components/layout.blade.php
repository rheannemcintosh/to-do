<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <!-- Header -->
    <x-head />

    <!-- Body -->
    <body class="">


        <!-- Page Content -->
        <div class="min-h-screen bg-gray-100 page-wrap pb-10">

            <main class="">

                <!-- Navigation -->
                <x-navigation />

                <!-- Content Container -->
                <div class="container mx-auto w-full pt-28">
                    {{ $slot }}
                </div>

            </main>
        </div>

        <!-- Footer -->
        <x-footer />

    </body>
</html>