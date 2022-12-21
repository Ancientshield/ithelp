@extends('layouts.article')

@section('main')
  <h1 class="font-thin text-4xl">文章列表->新增文章</h1>
  <form action="{{ route('articles.store') }}" method="post">
    <div class="field my-2">
      <label for="">標題</label>
      <input type="text" name="title" class="border border-gray-300 p-2">
    </div>
    <div class="field my-2">
      <label for="">內文</label>
      <textarea class="border border-gray-300 p-2" name="content" cols="30" rows="10"></textarea>
    </div>
  </form>
@endsection