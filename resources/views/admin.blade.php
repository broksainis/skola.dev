@extends('layouts.app')
@section('main-row')
    @include('inc.sideArea')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Admin Dashboard</div>

            <div class="panel-body">
                You are logged in as admin!
            </div>
        </div>
    </div>
@endsection