<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <title>Giant Book Supplier | @yield('title')</title>
</head>
<body>
    <div id="navbar">
        <h1 id="topBar">Giant Book Supplier</h1>
        <div id="botBar">
            <a href="/" class="navLink">Home</a>
            <div class="dropdown">
                <button href="/category" class="navLink" id="categoryBtn">Category</button>
                <div class="dropdown-content">
                    <ul class="dropdown-list">
                        @foreach ($category as $cats)
                        <li><a href="/category/{{ $cats['id'] }}" class="dropdown-category">{{ $cats['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <a href="/publisher" class="navLink">Publisher</a>
            <a href="/contact" class="navLink">Contact</a>
        </div>
    </div>
    <div>
        @yield('content')
    </div>
    <div class="footer">
        <h4 class="footer-words">@ Happy Book Store 2022</h4>
    </div>
</body>
</html>
