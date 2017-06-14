<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>@yield('title')</title>
<style>
  table.main
  {
    width: 900px;
    margin-left: auto;
    margin-right: auto;
  }
  table.sub
  {
    width: 900px;
  }
  th
  {
    text-align: center;
    padding-top: 10px;
    padding-bottom: 10px;
  }
</style>
</head>

<body>
  <table class="main">
    <tr>
      <td align="right">
        @section('header')
        <a href="{{ action('BlogController@index') }}">[記事一覧]</a> <a href="{{ action('BlogController@create') }}">[記事作成]</a>
        @show
      </td>
    </tr>
    <tr>
      <td><h2>@yield('title')</h2></td>
    </tr>
    <tr>
      <td>
        <table class="sub">
          @yield('content')
        </table>
      </td>
    </tr>
    <tr>
      <td align="center">
        <br>
        @section('footer')
        <a href="{{ action('BlogController@index') }}">[記事一覧]</a> <a href="{{ action('BlogController@create') }}">[記事作成]</a>
        @show
      </td>
    </tr>
  </table>
</body>

</html>
