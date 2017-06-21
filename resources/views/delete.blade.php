@extends('layout')

@section('title')
    [削除：確認] {{ $post['title'] }}
@endsection

@section('content')
    <tr>
        <td align="right">
            @include('parts._show')
            @include('parts._edit')
        </td>
    </tr>
    <tr>
        <td align="center">
            <br>
            本当に <b>{{ $post['title'] }}</b> を削除しますか？<br>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                {!! csrf_field() !!}
                {{ method_field('DELETE') }}
                <input type="submit" value="削除する">
            </form>
        </td>
    </tr>
@endsection
