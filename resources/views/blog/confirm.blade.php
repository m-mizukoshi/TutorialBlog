@extends('blog.layout')

@section('title')
  [削除：確認] {{ $post['title'] }}
@endsection

@section('header')
  <a href="{{ action('BlogController@show', $post->id) }}">[記事に戻る]</a>
  @parent
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
  <a href="{{ action('BlogController@show', $post->id) }}">[記事に戻る]</a><br><br>
  @parent
@endsection
