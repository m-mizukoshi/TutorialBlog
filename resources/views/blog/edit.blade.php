@extends('blog.layout')

@section('title')
  [編集] {{ $post['title'] }}
@endsection

@section('header')
  @parent
  <br>
  <a href="{{ action('BlogController@show', $post->id) }}">[閲覧] <b>{{ $post['title'] }}</b></a>
@endsection

@section('content')
  <tr>
    <td>
      <form action="{{ action('BlogController@update', $post->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        <input name="id" type="hidden" value="{{ $post['id'] }}">
        @include('blog.form')
        <input type="submit" value="更新">&nbsp;<input type="reset" value="リセット">
      </form>
    </td>
  </tr>
@endsection

@section('footer')
