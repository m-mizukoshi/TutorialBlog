{!! csrf_field() !!}
    タイトル (必須)<br>
    <input type="text" name="title" style="width:100%" value="{{ $post['title'] }}" required><br>
    <br>
    本文<br>
    <textarea name="content" style="width:100%" rows="30">{{ $post['content'] }}</textarea><br>
  </td>
</tr>
<tr>
  <td align="center">
