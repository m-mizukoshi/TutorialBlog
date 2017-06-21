@extends('layout')

@section('title')
    [記事作成]
@endsection

@section('content')
    <tr>
        <td>
            @include('parts._error')
            <form action="{{ route('posts.store') }}" method="POST">
                @include('parts._form')
                <div align="center">
                    <input type="submit" value="送信">&nbsp;<input type="reset" value="クリア">
                </div>
            </form>
        </td>
    </tr>
@endsection
