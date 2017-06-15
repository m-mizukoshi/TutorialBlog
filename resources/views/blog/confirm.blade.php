@extends('blog.layout')

@section('title')
  [削除：確認] {{ $post['title'] }}
@endsection

@section('header')
  @parent
  <br>
  <a href="{{ action('BlogController@show', $post->id) }}">[閲覧] <b>{{ $post['title'] }}</b></a>
@endsection

@section('content')
  <tr>
    <td align="center">
      <br>
      本当に <b>{{ $post['title'] }}</b> を削除しますか？<br>
      <form action="{{ action('BlogController@destroy', $post->id) }}" method="POST">
        {!! csrf_field() !!}
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="削除する">
      </form>
    </td>
  </tr>
@endsection

@section('footer')
