@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->has('mobile'))
<div class="alert alert-danger">{{ $errors->first('mobile') }}</div>
@endif

@if ($errors->has('email'))
<div class="alert alert-danger">{{ $errors->first('email') }}</div>
@endif
