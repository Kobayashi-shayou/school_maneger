@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading"><h3>勉強会入力フォーム</h3></div>

<div class="panel-body">
<form class="form-horizontal" method="post" action="{{ route('admin.form.store') }}">
@csrf

<!--タイトル-->
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
<label for="title" class="col-md-4 control-label">タイトル</label>

<div class="col-md-6">
<input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

@if ($errors->has('title'))
<span class="help-block">
<strong>{{ $errors->first('title') }}</strong>
</span>
@endif
</div>
</div>

<!--内容詳細-->
<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
<label for="body" class="col-md-4 control-label">詳細内容</label>
<div class="col-md-6">
<input id="body" type="text" class="form-control" name="body" value="{{ old('body') }}" required autofocus>
@if ($errors->has('body'))
<span class="help-block">
<strong>{{ $errors->first('body') }}</strong>
</span>
@endif
</div>
</div>

<!--インストラクター-->
<div class="form-group{{ $errors->has('instructor_id') ? ' has-error' : '' }}">
<label for="instructor" class="col-md-4 control-label">インストラクター</label>
<div class="col-md-6">
<input id="instructor_id" type="text" class="form-control" name="instructor_id" value="{{ old('instructor_id') }}" required>
@if ($errors->has('instructor_id'))
<span class="help-block">
<strong>{{ $errors->first('instructor_id') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group">
<div class="col-md-6 col-md-offset-4">



<button type="submit" class="btn btn-primary">登録</button>
</div>
</div>
</form>

<div align="center">
<a href="{{ route('admin.top') }}">TOPページはこちらへ</a><br>
</div>

</div>
</div>
</div>
</div>
</div>

@endsection
