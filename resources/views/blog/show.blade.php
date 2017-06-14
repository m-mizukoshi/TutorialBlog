@extends('blog.layout')

@section('title')
  {{ $post['title'] }}
@endsection

@section('header')

@section('content')
  <tr>
    <td align="right">
      @if(isset($post['title']))
        {{ $post['created_at'] }}

        @if(isset($post['updated_at']))
          <br>
          <span style="font-size:small;">( {{ $post['updated_at'] }} Update )</span>
        @endif

        <br>
        <a href="{{ action('BlogController@edit', $post->id) }}">[編集]</a> <a href="{{ action('BlogController@confirm', $post->id) }}">[削除]</a><br>
        <br>
      </td>
    </tr>
    <tr>
      <td>{{ $post['content'] }}</td>
    </tr>
    <tr>
      <td align="right">
        <br>
        <a href="{{ action('BlogController@edit', $post->id) }}">[編集]</a> <a href="{{ action('BlogController@confirm', $post->id) }}">[削除]</a><br>
        <br>
      @endif
    </td>
  </tr>
@endsection

@section('footer')
  @if(!isset($post['title']))
    ページが存在しません。<br>
    <a href="{{ action('BlogController@index') }}">[記事一覧へ]</a>
  @else
    @parent
  @endif
@endsection
