<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>記事一覧</title>
<style>
  td.title
  {
    font-size: 120%;
  }
  table
  {
    width: 900px;
    margin-left: auto;
    margin-right: auto;
  }
  th
  {
    text-align: center;
  }
</style>
</head>

<body>
  <h3 align="center">記事一覧</h3>
  <table>
    <tr>
      <th>記事ID</th>
      <th>タイトル</th>
      <th>投稿日時</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
      <td align="center">{{ $post['id'] }}</td>
      <td class="title"><a href="blog/{{ $post['id'] }}">{{ $post['title'] }}</a></td>
      <td align="center">{{ $post['created_at'] }}</td>
    </tr>
    <tr>
      <td></td>
      <td colspan = 2>{{ $post['content'] }}</td>
    </tr>
    <tr>
      <td colspan = 3>{{ $post['updated_at'] }}</td>
    </tr>
    @endforeach
    <tr>
      <td colspan = 3><a href="blog/create">記事の新規作成</a></td>
    </tr>
  </table>
</body>

</html>
