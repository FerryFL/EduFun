<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Page</title>
    @include('custom.linkbscss')
</head>

<body>
    <div class="container-fluid min-vh-100 p-0 m-0 d-flex flex-column">
        @include('layout.navbar')
        <main class="flex-grow-1">
            @yield('content')
        </main>
        @include('layout.footer')
    </div>
</body>

@include('custom.linkbsjs')

</html>
