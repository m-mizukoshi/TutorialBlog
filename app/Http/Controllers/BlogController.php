<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

  // 一覧画面
  public function index()
  {
    $posts = Post::orderBy('id', 'desc')->get();
    return view('blog.list', ["posts" => $posts]);
  }

  // 登録（投稿）
  public function store(Request $request)
  {
    $post = new Post;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->updated_at = null;
    $post->save();
    $id = $post->id;
    $action = "投稿";
    return view('blog.finish', ["action" => $action, "id"=> $id]);
  }

  // 作成画面
  public function create()
  {
    $post = new Post;
    return view('blog.create', ["post" => $post]);
  }

  // 詳細
  public function show(Request $request, $id)
  {
    $post = Post::find($id);
    return view('blog.show', ["post" => $post]);
  }

  // 更新
  public function update(Request $request)
  {
    $post = Post::find($request->id);
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();
    $action = "更新";
    return view('blog.finish', ["action" => $action, "id" => $request->id]);
  }

  // 削除
  public function destroy(Request $request, $id)
  {
    Post::destroy($request->id);
    $action = "削除";
    return view('blog.finish', ["action" => $action]);
  }

  // 削除確認画面
  public function confirm(Request $request, $id)
  {
    $post = Post::find($id);
    return view('blog.confirm', ["post" => $post]);
  }

  // 編集画面
  public function edit(Request $request, $id)
  {
    $post = Post::find($id);
    return view('blog.edit', ["post" => $post]);
  }

}
