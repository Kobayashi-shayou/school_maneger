@extends('layouts.app')

@section('content')
<div class="container">
@include('layouts.session.alert_msg')
<a class="btn btn-link" href="{{ route('admin.form.index') }}">
{{ __('勉強会フォームはこちら') }}
</a>

</div>
@endsection
