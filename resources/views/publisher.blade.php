@extends('navbar')

@section('title', 'Publisher')

@section('content')
    <div class="home-content published-content">
        <h2 class="home-title">Publisher</h2>
        <div class="published-list">
            @foreach ($publisher as $publish)
                <div class="publish-card">
                    <img class="publish-card-img" src="{{ asset('img/' . $publish['image']) }}" alt="Avatar">
                    <div class="container">
                        <h4 class="book-title-text">{{ $publish['name'] }}</h4>
                        <p class="book-author-text">{{ $publish['address'] }}</p>
                        <a href="/publisher/detail/{{ $publish['id'] }}">
                            <button class="detail-btn">Detail</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
