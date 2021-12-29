<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Header -->
<x-head />

<!-- Body -->
<body>


<!-- Page Content -->
<div class="bg-tdTeal page-wrap min-h-screen pb-10">
    <main>

        <!-- Navigation -->

        <!-- Content Container -->
        <div class="container mx-auto w-full pt-20">
            {{ $slot }}
        </div>

    </main>
</div>

<!-- Footer -->

</body>
</html>