@extends('layouts.app')
@section('main-row')
    @include('inc.sideArea')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Admin Panelis</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h1>Tu esi ielogojies kā administrators.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
