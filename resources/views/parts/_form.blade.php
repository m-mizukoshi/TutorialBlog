{{ csrf_field() }}
タイトル <span style="font-size: small;">※必須</span><br>
<input type="text" name="title" style="width:100%" value="{{ $post['title'] }}"><br>
<br>
本文<br>
<textarea name="content" style="width:100%" rows="30">{{ $post['content'] }}</textarea><br>
<br>
