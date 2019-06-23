@extends('layout.default')

@section('title')
  新規作成
@endsection

@section('content')
  <div class="container1">
    <h1>歌詞投稿</h1>
    <form action="{{url('/plays')}}" method="post">
    {{csrf_field() }}
      <p><input type="text" name="title" placeholder="タイトル"></p>
      <p><input type="text" name="arthist" placeholder="アーティスト"></p>
      <p><textarea name="body" placeholder="歌詞"></textarea></p>
      <p><input type="submit" value="投稿"></p>
    </form>  
    <a href="/">戻る</a>
  </div>
@endsection