<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>

    @stack('styles')
</head>
<body>
    @session('status')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
    @endsession
    @yield('content')

    @stack('scripts')
</body>
</html>