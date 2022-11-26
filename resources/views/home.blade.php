@extends('navbar')

@section('title', 'Home')

@section('content')
    <div class="home-content">
        <h2 class="home-title">Book List</h2>
        <div class="book-list">
            @foreach ($data as $dats)
                <div class="card">
                    <img class="card-img" src="img/{{ $dats['image'] }}" alt="Avatar" style="width:7vw">
                    <div class="container">
                        <h4 class="book-title-text">{{ $dats['title'] }}</h4>
                        <p class="by">by:</p>
                        <p class="book-author-text">{{ $dats['author'] }}</p>
                        <a href="/detail/{{ $dats['id'] }}">
                            <button class="detail-btn">Detail</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
