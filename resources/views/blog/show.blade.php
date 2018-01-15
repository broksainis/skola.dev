@extends('layouts.app')

@section('main-row')
    @include('inc.sideArea')

    <div class="col-md-8 col-md-offset-2">
        <h3 class="text-center">{{$news->title}}</h3>
        <small class="text-muted">{{$news->author}}</small>
        <p class="card-text">{{$news->content}}</p>
    </div>
@endsection