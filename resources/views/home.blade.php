@extends('layout.app')

@section('content')
<div class="cards">
    @foreach ($movies as $key => $movie)
        <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                    <div class="img-box text-center">
                        <img class="w-100 rounded-1" src="{{$movie->image}}" :alt="item.title">
                        <span class="fw-bold title">{{$movie->title}}</span>
                    </div>
            </div>
            <div class="flip-card-back rounded-1 p-3">
                <div class="fw-bold">{{$movie->original_title}}</div>
                <p class="">Uscita: {{$movie->date}}</p>
                <p class="">Voto: {{$movie->vote}}</p>
                <p class="p-overview py-1">
                    <em>Trama:</em><br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, quidem sit. Magnam atque aperiam explicabo assumenda unde exercitationem, neque odit aspernatur modi temporibus suscipit impedit excepturi rerum eos esse iure?
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
