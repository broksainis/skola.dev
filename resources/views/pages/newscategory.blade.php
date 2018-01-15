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

        <div id="categories table" class="table-responsive">
            @if(count($newscategories) > 0)
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nosaukums</th>
                    <th>Autors</th>
                    <th>Pievienots</th>
                    <th>Rediģēt</th>
                    <th>Dzēst</th>
                </tr>

                @foreach($newscategories as $i=>$category)
                <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->author}}</td>
                    <td>{{$category->created_at}}</td>
                    <td><a data-js="open-edit"><span id="{{$category->id}}" class="btn btn-warning">Rediģēt</span></a></td>
                    <td><a data-js-type="open-remove"><span id="{{$category->id}}" class="btn btn-warning">Dzēst</span></a></td>
                </tr>
                @endforeach
            </table>
                @endif
        </div>

    </div>

@endsection