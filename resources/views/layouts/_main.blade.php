<!DOCTYPE html>
<html lang="en">

@include('layouts/_head')

<body>
    @include('layouts/_nav')
    @include('layouts/_alert')
    <main class="container">
        <div class="my-lg-4 my-4">
            <h3 class="text-center">
                {{ $title }}
            </h3>
            <div class="row justify-content-center gy-4">
                @yield('main')
            </div>
        </div>
    </main>
    @include('layouts/_footer')
    @include('layouts/_scripts')
</body>

</html>
