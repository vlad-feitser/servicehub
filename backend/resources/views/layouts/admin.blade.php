<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @hasSection('title')
            @yield('title') | ServiceHub Admin
        @else
            ServiceHub Admin
        @endif
    </title>
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>