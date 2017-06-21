{{-- <a href="{{ route('posts.edit', ['id' => $post->id]) }}">[編集]</a> --}}
{!! link_to_route('posts.edit', '[編集]', ['id' => $post->id]) !!}
