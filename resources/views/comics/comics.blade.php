@extends('layouts.app')

@section('title', 'comics')

@section('content')
<section>
    <h1 class="text-center">COMICS</h1>
</section>

<section>

<div class="container">
    <div class="row row-gap-3">
        @foreach($comics as $comic)
        <div class="col-4">
            <img src="{{$comic["thumb"]}}" class="card-img-top" alt="...">
            <div class="text-center">
                <h3>{{ $comic["title"] }}</h3>
                <h5> {{ $comic["series"] }} <h5>
            </div>
          </div>
        @endforeach
    </div>
</div>

</section>

@endsection