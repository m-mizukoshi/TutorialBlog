@extends('blog.layout')

@section('title')
  [{{ $action }}が完了しました]
@endsection

@section('header')

@section('content')
  <tr>
    <td align="center">
      @if(isset($id))
      [<a href="{{ action('BlogController@show', $id) }}">{{ $action }}したページを見る</a>]
      @endif
    </td>
  </tr>
@endsection

@section('footer')
