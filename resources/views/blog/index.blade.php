@extends('layouts.app')
@include('inc.menuArea')
@section('main-row')
    @if((count($news) > 0))
        @foreach($news as $new)
    <div class="card text-left">
        <div class="card-block">
            <h4 class="card-title">{{$new->title}}</h4>
            <p class="card-text">{{$new->content}}</p>
            <a href="{{route('blog.show', ['id' => $new->id])}}" class="btn btn-primary">Lasīt tālāk..</a>
        </div>
        <div class="card-footer text-muted">
            <p>{{$new->created_at}}</p>
        </div>
    </div>
        @endforeach
    @else
        <div class="alert alert-danger">Nav ziņu.</div>
    @endif
@endsection