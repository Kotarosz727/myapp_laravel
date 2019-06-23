@extends('layout.default')

@section('title')
  歌詞一覧
@endsection

@section('content')
  <span style="font-size:13px;"><a href="{{ url('/plays/new') }}">新規作成</a></span>
  <div class="container1">
    @foreach ($plays as $play)
      <li><a href="plays/{{ $play->id}}">{{ $play->title }}</a></li>
      <p>{{ $play->body }}</p>
    @endforeach
  </div>  
@endsection
