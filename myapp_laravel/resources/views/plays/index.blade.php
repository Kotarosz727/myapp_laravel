@extends('layout.default')

@section('title')
  歌詞一覧
@endsection

@section('content')
  <a href="{{ url('/plays/new') }}" style="float:right">新規作成</a>
  @foreach ($plays as $play)
    <li><a href="plays/{{ $play->id}}">{{ $play->title }}</a></li>
    <p>{{ $play->body }}</p>
  @endforeach
@endsection
