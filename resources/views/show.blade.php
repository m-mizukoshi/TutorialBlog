@extends('layout')

@section('title')
    @if(isset($post['title']))
        {{ $post['title'] }}
    @else
        [ページが存在しません]
    @endif
@endsection

@section('content')
    <tr>
        <td align="right">
            @if(isset($post['title']))
                {{ $post['created_at'] }}<br>

                @if($post['updated_at']!=$post['created_at'])
                    <span style="font-size:small;">( {{ $post['updated_at'] }} 更新 )</span><br>
                @endif

                @include('parts._edit')
                @include('parts._delete')<br>
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
                @include('parts._edit')
                @include('parts._delete')<br>
                <br>
            @endif
        </td>
    </tr>
@endsection
