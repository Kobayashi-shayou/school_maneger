@extends('layouts.payment')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
@include('layouts.session.alert_msg')
<div class="panel-heading"><h3>ありがとうございます！</h3></div>


<form action="{{ route('user.payment.aaa') }}" method="post">
  @csrf
  <script
    src="https://checkout.pay.jp/"
    class="payjp-button"
    data-key="{{ config('payjp.public_key') }}"
    data-text="カード情報を入力"
    data-submit-text="カードを登録する"
   ></script>
</form>

</body>
<a href="{{ route('user.home') }}">TOPへ戻る</a>

</div>
</div>
</div>
</div>

@endsection

