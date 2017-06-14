@extends('blog.layout')

@section('title')
  [記事一覧]
@endsection

@section('header')

@section('content')
{{ dd($posts) }}

  <tr>
    <th width=10%>記事ID</th>
    <th width=65%>タイトル</th>
    <th width=25%>投稿日時</th>
  </tr>
  @foreach ($posts as $post)
    <tr>
      <td align="center">{{ $post['id'] }}</td>
      <td>
        <a href="{{ action('BlogController@show', $post->id) }}"><b>{{ $post['title'] }}</b></a>
      </td>
      <td align="center">{{ $post['created_at'] }}</td>
    </tr>
    <tr>
      <td></td>
      <td>
        <span style="font-size:small;">
          {{ mb_substr($post['content'], 0, 30) }}
          @if(mb_strlen($post['content']) > 30)
            ...
          @endif
        </span>
      </td>
      <td align="center">
        @if(isset($post['updated_at']))
          <span style="font-size:x-small;">( {{ $post['updated_at'] }} update )</span>
        @endif
      </td>
    </tr>
  @endforeach
@endsection

@section('footer')
