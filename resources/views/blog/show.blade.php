@extends('layouts.app')
@include('inc.menuArea')
@section('main-row')
    <div class="col-md-8 col-md-offset-2">
        @if($news->image)<img class="img-large-center" src="{{ $news->image }}" alt="">@else <img class="img-thumbnail" src="https://mosaikweb.com/wp-content/plugins/lightbox/images/No-image-found.jpg" alt="">  @endif
        <h3 class="text-center">{{$news->title}}</h3>
        <small class="text-muted">{{$news->author}}</small>
        <p class="card-text">{{$news->content}}</p>
    </div>
@endsection