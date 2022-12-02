@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
@include('layouts.session.alert_msg')
<div class="panel-heading"><h3>詳細ページ</h3></div>

<table class="table table-striped table-hover table-centered">
<thead>
<tr>
<th>タイトル</th>
<th>内容</th>
<th>インストラクター</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{ $study->title }}</td>
<td>{{ $study->body }}</td>
<td>{{ $study->instructor_id }}</td>
<td><a href="{{ route('user.apply', $study->id) }}" class="btn btn-primary btn-sm">申し込み</a></td>
</tr>
</tbody>
</table>

</body>
<a href="{{ route('user.home') }}">TOPへ戻る</a>

</div>
</div>
</div>
</div>

@endsection
