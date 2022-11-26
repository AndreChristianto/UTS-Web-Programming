@extends('navbar')

@section('content')
<div class="home-content">
    <h2 class="category-title">{{ $categ['name'] }}</h2>
    <div class="book-list">
        @foreach ($selected as $select)
            <div class="card">
                <img class="card-img" src="{{ asset('img/' . $select['image']) }}" alt="Avatar" style="width:7vw">
                <div class="container">
                    <h4 class="book-title-text">{{ $select['title'] }}</h4>
                    <p class="by">by:</p>
                    <p class="book-author-text">{{ $select['author'] }}</p>
                    <a href="/detail/{{ $select['id'] }}">
                        <button class="detail-btn">Detail</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
