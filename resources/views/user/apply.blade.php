@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
@include('layouts.session.alert_msg')
<div class="panel-heading"><h3>コース申し込み</h3></div>

<table class="table table-striped table-hover table-centered">
<thead>
<tr>
<th>タイトル</th>
<th>内容</th>
<th>インストラクター</th>
<th>価格</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{ $study->title }}</td>
<td>{{ $study->body }}</td>
<td>{{ $study->instructor_id }}</td>
<td>5000円</td>
</tr>
</tbody>
</table>

<!-- クーポン関連フォーム-->

<div class="panel-body">
<form class="form-horizontal" method="POST" action="{{ route('user.confirm') }}">
{{ csrf_field() }}

<div class="form-group{{ $errors->has('coupon') ? ' has-error' : '' }}">
<label for="" class="col-md-4 control-label">クーポンコード入力フォーム</label>

<div class="col-md-6">
<input id="coupon" type="text" class="form-control" name="coupon" value="{{ old('coupon') }}" required>

<br>
</div>
</div>
<input type="hidden" name="study_id" value="{{ $study->id }}">
<button type="submit" class="btn btn-primary">次へ</button>
</form>

<br>
<br>
<br>


</body>
<a href="{{ route('user.home') }}">TOPへ戻る</a>

</div>
</div>
</div>
</div>

@endsection
