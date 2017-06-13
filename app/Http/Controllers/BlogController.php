<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{

  // 一覧画面
  public function index()
  {
    // $posts = DB::select('select * from posts order by "id" desc');
    // return view('list', ["posts" => $posts]);
    // $posts = Post::all();
    $posts = Post::orderBy('id', 'desc')->get();
    return view('list', ["posts" => $posts]);
  }

  // 登録
  public function store(Request $request)
  {
    return view('index');
  }

  // 作成画面
  public function create()
  {
    return view('create');
  }

  // 詳細
  public function show(Request $request, $id)
  {
    $post = Post::find($id);
    return view('show', ["post" => $post]);
  }

  // 更新
  public function update(Request $request, $id)
  {
    //
  }

  // 削除
  public function destroy(Request $request, $id)
  {
    //
  }

  // 編集画面
  public function edit(Request $request, $id)
  {
    $post = Post::find($id);
    return view('edit', ["post" => $post]);
  }

}
