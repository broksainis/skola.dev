@extends('layouts.app')
@include('inc.menuArea')
@section('main-row')
    @if((count($news) > 0))
        @foreach($news as $new)
    <div class="card text-left">
        <div class="card-block">
            @if($new->image)<img class="img-thumbnail" src="{{ $new->image }}" alt="">@else <img class="img-thumbnail" src="https://mosaikweb.com/wp-content/plugins/lightbox/images/No-image-found.jpg" alt="">  @endif
            <h4 class="card-title">{{$new->title}}</h4>
            <p class="card-text">{{ str_limit($new->content, $limit = 150, $end = '...') }}</p>
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