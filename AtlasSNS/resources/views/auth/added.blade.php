@extends('layouts.logout')

@section('content')

<div id="clear">
  <!-- 前の変数の値を表示するにはoldを使う-->
  <p> {{ old('username') }}さん</p>
  <p>ようこそ！AtlasSNSへ！</p>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  <p class="btn"><a href="/login">ログイン画面へ</a></p>
</div>

@endsection
