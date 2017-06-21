<a href="{{ route('posts.index') }}">[記事一覧]</a> <a href="{{ route('posts.create') }}">[記事作成]</a>
@if(Auth::check())
    <br>
    <span style="font-size: small;">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        [ログアウトして記事一覧へ]
        </a>
    </span>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endif
