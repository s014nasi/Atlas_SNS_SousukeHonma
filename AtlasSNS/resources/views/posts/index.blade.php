@extends('layouts.login')

@section('content')

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    {!! Form::open(['url' => 'post/create']) !!}
    <div class="form-group">
      {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容を入力してください。']) !!}
    </div>
        <button type="submit" class="btn btn-success pull-right">投稿</button>
        {!! Form::close() !!}
    </div>



   <!-- ログインユーザーつぶやき編集　モーダル実装　-->
   <div class="bootstrap">
   <!-- モーダル表示のためのボタン -->
   <button class="btn btn-primary" data-toggle="modal" data-target="#modal-example{{ $timeline->id }}"><image class="update" src="{{asset('/images/edit.png') }}"></button>

   <!-- モーダルダイアログ　-->
   <!-- インプットタグをつける -->
   <div class="modal fade" id="modal-example{{$timeline->id }}" tabindex="-1">
     <div class="modal-dialog">
   <!-- モーダルのコンテンツ　-->
    <div class="modal-content">
  <!-- モーダル・ダイアログに表示させたいコンテンツ記入 -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">$times;</span></button>
        <h4 class="modal-title"id="modal-label"></h4>
      </div>
      <!--  モーダルのボディー  -->
     {!! Form::open(['url' => '/post/edit' .$timeline->id]) !!} -->
      <div class="modal-body">
          <!-- 未定義の変数と出てくる＄timeline  -->
     {!! Form::input('post', 'uppost', $timeline->posts, ['required', 'class' => 'form-control']) !!}
          </div>
      <!-- モーダルのフッター   -->
    <div class="modal-footer">
      <button type="button" class="btn btn-default"data-dismiss="modal">閉じる</button>
      <button type="submit" class="btn btn-danger">更新</button>
    </div>
    {!! Form::close() !!}
  </div>
</div>
</div>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
@endsection
