<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>{{ $post['title'] }}</title>
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
<table>
  <tr>
    <td><h3>{{ $post['title'] }}</h3></td>
  </tr>
  <tr>
    <td align="right">{{ $post['created_at'] }}
    @isset($post['updated_at'])
    <br>
    更新&nbsp;{{ $post['updated_at'] }}
    @endisset
    </td>
  <tr>
    <td>{{ $post['content'] }}</td>
  </tr>
  <tr>
    <td></td>
  </tr>
</table>
</body>

</html>
