<!DOCTYPE html>
<html lang="en">
@include('partials.vitrine.head')
<body class="index-page">
    @include('partials.vitrine.navbar')
    @yield('content')
    @include('partials.vitrine.footer')

    @include('partials.vitrine.script')
</body>
</html>
