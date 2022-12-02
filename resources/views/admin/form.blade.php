@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading"><h3>勉強会入力フォーム</h3></div>

<div class="panel-body">
<form class="form-horizontal" method="POST" action="{{ route('admin.form') }}">
{{ csrf_field() }}

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
<div class="form-group{{ $errors->has('instructor') ? ' has-error' : '' }}">
<label for="instructor" class="col-md-4 control-label">インストラクター</label>
<div class="col-md-6">
<input id="instructor" type="instructor" class="form-control" name="instructor" value="{{ old('instructor') }}" placeholder="例:1234567" required>
@if ($errors->has('instructor'))
<span class="help-block">
<strong>{{ $errors->first('instructor') }}</strong>
</span>
@endif
</div>
</div>


<div class="form-group">
<div class="col-md-6 col-md-offset-4">

<input type="hidden" name="" value="">

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