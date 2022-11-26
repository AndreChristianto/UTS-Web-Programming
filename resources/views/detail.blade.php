@extends('navbar')

@section('content')
    <div class="detail-whole">
        <div class="detail">
            <img class="detail-img" src="{{ asset('img/' . $detail['image']) }}" alt="Avatar" style="width:20vw">
            <div class="container">
              <h4 class="detail-title"><b>Title : {{ $detail['title'] }}</b></h4>
              <p class="detail-author">Author : {{ $detail['author'] }}</p>
              <p class="detail-author">Publisher : {{ $publisher[0]['name'] }}</p>
              <p class="detail-author">Year : {{ $detail['year'] }}</p>
              <h5 class="detail-synopsis">Synopsis : {{ $detail['synopsis'] }}</h5>
            </div>
            <a href="/">
                <button class="detail-btn">Back</button>
            </a>
        </div>
    </div>
@endsection
