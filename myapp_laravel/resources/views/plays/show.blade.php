@extends('layout.default')

@section('title')
  歌詞
@endsection

@section('content')
  <div class="container3">
    <h1>{{ e($play->title) }}</h1>
    <p>{!! e($play->arthist) !!}</p>
    <p>{{ e($play->body) }}</p>
    <a href="/">戻る</a>
  </div>
@endsection