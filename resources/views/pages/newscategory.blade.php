@extends('layouts.app')

@section('main-row')
    @include('inc.sideArea')

    <div class="col-md-8" id="main-category">
        <div id="category header">
            <h4>Jaunumu kategorijas</h4>
        </div>

        <div id="category-container">
            <div id="category-form">
                {!! Form::open(['route' => 'newscategory.add', 'method' => 'POST']) !!}
                    {!! Form::label('newsCategoryName', 'Nosaukums') !!}
                    {!! Form::text('newsCategoryName', '', ['class' => 'form-control']) !!}
                    {!! Form::submit('Pievienot', ['class' => 'btn btn-success btn-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection