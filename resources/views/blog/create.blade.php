@extends('blog.layout')

@section('title')
  [記事作成]
@endsection

@section('header')

@section('content')
  <tr>
    <td>
      <form action="{{ action('BlogController@store') }}" method="POST">
        @include('blog.form')
        <input type="submit" value="送信">&nbsp;<input type="reset" value="クリア">
      </form>
    </td>
  </tr>
@endsection

@section('footer')
