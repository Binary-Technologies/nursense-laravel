@if (count($errors)>0)
    @foreach ($errors as $error)
        {{$error}}
    @endforeach
@endif

@if (session('success'))
    <h1>{{session('success')}}</h1>
@endif

@if (session('error'))
    <h1>{{session('error')}}</h1>
@endif