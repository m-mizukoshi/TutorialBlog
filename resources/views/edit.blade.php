<?php
use App\Post;
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>test</title>
</head>

<body>

dd($lists);
<!--
  <p>こんにちは</p>
  <table>
    <tr>
      <th>記事ID</th>
      <th>タイトル</th>
      <th>投稿日時</th>
    </tr>
    @foreach ($lists as $list)
    <tr>
      <td>{{$list->id}}</td>
      <td>{{$list->title}}</td>
      <td>{{$list->created_at}}</td>
    </tr>
    <tr>
      <td colspan = 3>{{$list->content}}</td>
    </tr>
    <tr>
      <td colspan = 3>{{$list->updated_at}}</td>
    </tr>
    @endforeach
  </table>
</body> -->

</html>



<!-- <p>こんにちは</p>
<table>
  <tr>
    <th>記事ID</th>
    <th>タイトル</th>
    <th>投稿日時</th>
  </tr>
  <?php
  // foreach ($lists as $list)
  // {
  // ?>
  // <tr>
  //   <td><?php echo $list['id']; ?></td>
    <td><?php echo $list['title']; ?></td>
    <td><?php echo $list['created_at']; ?></td>
  </tr>
  <tr>
    <td colspan = 3><?php echo $list['content']; ?></td>
  </tr>
  <tr>
    <td colspan = 3><?php echo $list['updated_at'] ?></td>
  </tr>
  <?php
  }
  ?>
</table> -->
