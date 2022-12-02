@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
@include('layouts.session.alert_msg')
<div class="panel-heading"><h3>お届け先一覧</h3></div>

<table class="table table-striped table-hover table-centered">
<thead>
<tr>
<th>タイトル</th>
<th>内容</th>
<th>インストラクター</th>
</tr>
</thead>
<tbody>
@foreach ($studies as $study)
<tr>
<td>{{ $study->title }}</td>
<td>{{ $study->body }}</td>
<td>{{ $study->instructor->name }}</td>
</tr>
@endforeach
</tbody>
</table>

</body>

</div>
</div>
</div>
</div>

@endsection