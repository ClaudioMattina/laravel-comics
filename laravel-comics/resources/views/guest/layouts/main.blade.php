<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link css tradotto dal scss che abbiamo nell cartella sass --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>DC COMICS</title>
</head>
<body>
    
    <header>

    </header>

    <main>
        
        @yield('main-content')
    
    </main>

    

    <footer>

    </footer>

</body>
</html>