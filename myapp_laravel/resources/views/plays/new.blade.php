@extends('layout.default')

@section('title')
  新規作成
@endsection

@section('content')
  <h1>歌詞投稿</h1>
  <form action="/posts" method="post">
    <p><input type="text" name="title" placeholder="タイトル"></p>
    <p><input type="text" name="アーティスト" placeholder="アーティスト"></p>
    <p><textarea name="body" placeholder="歌詞"></textarea></p>
    <p><input type="submit" value="投稿"></p>
  </form>  
  <a href="/">戻る</a>
@endsection