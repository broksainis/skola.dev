@extends('layouts.app')

@section('main-row')
    @include('inc.sideArea')


    @if((count($news) > 0))
        @foreach($news as $new)
    <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160fc022bd5%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160fc022bd5%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22118.0859375%22%20y%3D%2297.2%22%3E318x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">{{$new->title}}</h4>
            <p class="card-text">{{$new->content}}</p>
            <p class="card-text">Autors: {{$new->author}}</p>
            <a href="{{route('blog.show', ['id' => $new->id])}}" class="btn btn-primary">Lasīt ziņu</a>
        </div>
    </div>
        @endforeach
    @else
        <div class="alert alert-danger">Nav ziņu.</div>
    @endif
@endsection