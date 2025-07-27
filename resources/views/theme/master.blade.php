<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head')

<body>
    @include('theme.partials.header')

    <main class="site-main">
        @include('theme.partials.hero')

        @yield('content')


    </main>

    @include('theme.partials.footer')


    @include('theme.partials.scripts')

</body>

</html>