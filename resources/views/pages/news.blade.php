@extends('layouts.app')

@section('main-row')
    @include('inc.sideArea')

    <div class="col-md-8" id="main-category">
        <div id="category header">
            <h4>Jaunumi</h4>
        </div>

        <div id="category-container">
            <div id="category-form">
                {!! Form::open(['route' => 'news.add', 'method' => 'POST']) !!}
                {!! Form::label('newsTitle', 'Nosaukums') !!}
                {!! Form::text('newsTitle', '', ['class' => 'form-control']) !!}

                <select name="newsCategoryName" id="newsCategoryName" class="form-control">
                    @foreach ($newscategories as $category)
                    <option>{{$category->name}}</option>
                    @endforeach
                </select>

                {!! Form::label('newsContent', 'Saturs') !!}
                {!! Form::textarea('newsContent', '', ['class' => 'form-control']) !!}

                {!! Form::submit('Pievienot', ['class' => 'btn btn-success btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>

@endsection