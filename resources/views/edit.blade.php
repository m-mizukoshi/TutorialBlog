@extends('layout')

@section('title')
    [編集] {{ $post['title'] }}
@endsection

@section('content')
    <tr>
        <td align="right">
            @include('parts._show')
            @include('parts._delete')
        </td>
    </tr>
    <tr>
        <td>
            @include('parts._error')
            <form action="{{ route('posts.update', $post) }}" method="POST">
                {{ method_field('PUT') }}
                @include('parts._form')
                <div align="center">
                    <input type="submit" value="更新">&nbsp;<input type="reset" value="リセット">
                </div>
            </form>
        </td>
    </tr>
@endsection
