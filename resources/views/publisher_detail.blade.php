@extends('navbar')

@section('content')
    <div class="detail-publisher">
        <div class="publisher-content">
            <h2 class="publisher-title">{{ $publisher['name'] }}</h2>
            <h4 class="publisher-text">{{ $publisher['address'] }}</h4>
            <h4 class="publisher-text">{{ $publisher['phone'] }}</h4>
            <h4 class="publisher-text">{{ $publisher['email'] }}</h4>
        </div>
        <div class="book-list">
            @foreach ($books as $book)
                <div class="publish-card-detail">
                    <img class="publish-card-img" src="{{ asset('img/' . $book['image']) }}" alt="Avatar" style="width:7vw">
                    <div class="container">
                        <h4 class="book-title-text">{{ $book['title'] }}</h4>
                        <p class="by">by:</p>
                        <p class="book-author-text">{{ $book['author'] }}</p>
                        <a href="/detail/{{ $book['id'] }}">
                            <button class="detail-btn">Detail</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
