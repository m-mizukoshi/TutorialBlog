<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>記事の新規作成</title>
<style>
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

<form action="store" method="POST">
<table>
  <tr>
    <td><h3>記事の新規作成<h3></td>
  </tr>
  <tr>
    <td>タイトル</td>
  </tr>
  <tr>
    <td><input type="text" name="title" size="130"></td>
  </tr>
  <tr>
    <td>本文</td>
  </tr>
  <tr>
    <td><textarea name="content" cols="120" rows="30"></textarea></td>
  </tr>
  <tr>
    <td align="center"><input type="submit" value="送信">&nbsp;<input type="reset" value="リセット"></td>
</table>
</body>

</html>
