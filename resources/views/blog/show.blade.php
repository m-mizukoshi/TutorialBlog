@extends('blog.layout')

@section('title')
  @if(isset($post['title']))
    {{ $post['title'] }}
  @else
    [ページが存在しません]
  @endif
@endsection

@section('header')

@section('content')
  <tr>
    <td align="right">
      @if(isset($post['title']))
        {{ $post['created_at'] }}<br>

        @if(isset($post['updated_at']))
          <span style="font-size:small;">( {{ $post['updated_at'] }} 更新 )</span><br>
        @endif

        @include('blog.postController')<br>
        <br>
      </td>
    </tr>
    <tr>
      <td>
        {!! nl2br($post['content']) !!}
      </td>
    </tr>
    <tr>
      <td align="right">
        <br>
        @include('blog.postController')<br>
        <br>
      @endif
    </td>
  </tr>
@endsection

@section('footer')
