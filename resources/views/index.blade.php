@extends('layout')

@section('title')
    @if(isset($keyword, $dateStart, $dateEnd))
        [{{ $dateStart }} 〜 {{ $dateEnd }} の "{{ $keyword }}" の検索結果]
    @elseif(isset($keyword))
        ["{{ $keyword }}" の検索結果]
    @elseif(isset($dateStart, $dateEnd))
        [{{ $dateStart }} 〜 {{ $dateEnd }} の検索結果]
    @elseif(Session::has('status'))
        [記事の{{ session('status') }}が完了しました]
    @else
        [記事一覧]
    @endif
@endsection

@section('content')
    <tr>
        <td align="center" colspan="3">{{ $posts->links() }}</td>
    </tr>
    <tr>
        <th width=15%>記事ID</th>
        <th width=60%>タイトル</th>
        <th width=25%>投稿日時</th>
    </tr>

    @foreach ($posts as $post)
        <tr>
            <td align="center">
                {!! link_to_route('posts.show', $post->id, $post) !!}
            </td>
            <td>
                <b> {!! link_to_route('posts.show', $post->title, $post) !!} </b>
            </td>
            <td align="center">
                {{ $post['created_at'] }}
            </td>
        </tr>
        <tr>
            <td class="list" align="center">
                <span style="font-size:x-small;">
                    @include('parts._edit')
                    @include('parts._delete')
                </span>
            </td>
            <td class="list">
                <span style="font-size:small;">
                    {{ mb_substr($post['content'], 0, 30) }}
                    @if(mb_strlen($post['content']) > 30)
                        ...
                    @endif
                </span>
            </td>
            <td class="list">
            </td>
        </tr>
    @endforeach
    <tr>
        <td align="center" colspan="3">
            {{ $posts->links() }}
            <br>
            <span style="font-size: small;">
            <form action="{{ route('posts.index') }}" method="GET">
            <table>
                <tr>
                    <td width="380px">
                        キーワード検索(AND)<br>
                        <input type="text" name="keyword" style="width:100%" value="{{ $keyword }}">
                    </td>
                    <td width="20px"></td>
                    <td width="380px">
                        投稿日から検索 (yyyy-mm-dd)<br>
                        <input type="date" name="dateStart" value="{{ $dateStart }}"> から
                        <input type="date" name="dateEnd" value="{{ $dateEnd }}"> より前
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="検索">
                    </td>
                </tr>
            </table>
            </form>
            </span>
        </td>
    </tr>

@endsection
