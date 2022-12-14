@extends('layouts.app')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
@include('layouts.session.alert_msg')
<div class="panel-heading"><h3>コース申し込み確認フォーム</h3></div>

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
<td>{{ $price }} 円</td>
</tr>
</tbody>
</table>



<br>


<form method="POST" name="a_form" action="{{ route('user.index') }}">
@csrf
<input type="hidden" name="study_id" value="{{ $study->id }}">
<input type="hidden" name="price" value="{{ $price }}">
<button type="submit" class="btn btn-primary btn-sm">送信する</button>
</form>


<br>
<br>


</body>
<a href="{{ route('user.home') }}">TOPへ戻る</a>

</div>
</div>
</div>
</div>

@endsection
