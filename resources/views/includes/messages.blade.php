@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->has('mobile'))
<div class="alert alert-danger">{{ $errors->first('mobile') }}</div>
@endif

@if ($errors->has('email'))
<div class="alert alert-danger">{{ $errors->first('email') }}</div>
@endif


@if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif


@if ($errors->has('title'))
<div class="alert alert-danger">{{ $errors->first('title') }}</div>
@endif


@if ($errors->has('contents'))
<div class="alert alert-danger">{{ $errors->first('contents') }}</div>
@endif


@if ($errors->has('image'))
<div class="alert alert-danger">{{ $errors->first('image') }}</div>
@endif


@if ($errors->has('link'))
<div class="alert alert-danger">{{ $errors->first('link') }}</div>
@endif
