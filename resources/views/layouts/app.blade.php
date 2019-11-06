<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="wrapper">
    @include('includes.sidebar')

    @yield('content')

    @include('includes.footer')
</div>
</body>
</html>
