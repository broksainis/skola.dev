@if(count($errors) > 0 )
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{@error}}</div>
    @endforeach
@endif

@if(session('Erorr'))
    <div class="alert alert-danger">{{session('Error')}}</div>
@endif

@if(session('Success'))
    <div class="alert alert-danger">{{session('Success')}}</div>
@endif