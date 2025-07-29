<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Lab Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/fluxui.min.css" rel="stylesheet">
</head>
<body style="padding: 2rem; font-family: sans-serif;">
    @if(session('success'))
        <div class="fluxui-alert fluxui-alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/fluxui@latest/dist/fluxui.min.js"></script>
</body>
</html>
