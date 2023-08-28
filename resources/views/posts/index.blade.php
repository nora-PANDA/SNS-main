@extends('layouts.login')

@section('content')
  <img class="user-icon" src="images/icon1.png"><!--アイコン表示したい-->
  {!! Form::open(['url' => 'post/create']) !!}
    <div class="post-form">
      {{Form::input('text', 'newpost', null, ['required','class' => 'post','placeholder' => '投稿内容を入力してください。'])}}
    </div>
    <button type="submit" class=""><img src="images/post.png" alt="送信"></button>
  {!! Form::close() !!}

<!--投稿内容-->
  @foreach ($posts as $post)
    <div class=""><!--自分-->
      <tr>
        <td>{{ $user_id ->username }}</td><!--ユーザーネーム-->
        <td>{{ $post ->post }}</td><!--投稿内容-->
      </tr>
      <!--編集ボタン-->
      <!--削除ボタン-->
    </div>

{{--フォロワー投稿
        <div class=""><!--フォロー-->
      <tr>
        <td>{{ $ ->username }}</td><!--ユーザーネーム-->
        <td>{{ $ ->post }}</td><!--投稿内容-->
      </tr>
    </div>--}}
  @endforeach

@endsection
