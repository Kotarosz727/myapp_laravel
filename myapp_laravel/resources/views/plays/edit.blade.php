@extends('layout.default')

@section('title')
  編集
@endsection

@section('content')
  <div class="container1">
    <h1>編集</h1>
    <form action="/plays/edit" method="post">
    {{csrf_field() }}
      <input type="hidden" class="form-control" name="id" value="{{ $play->id }}">
      <p><input type="text" name="title" value="{{ old('title', $play->title) }}"></p>
      <p><input type="text" name="arthist" value="{{ old('arthist', $play->arthist) }}"></p>
      <p><input type="text" name="body" value="{{ old('body', $play->body) }}"></textarea></p>
      <p><input type="submit" value="更新"></p>
    </form>  
    <a href='/plays/{{$play->id}}'>戻る</a>
  </div>
@endsection