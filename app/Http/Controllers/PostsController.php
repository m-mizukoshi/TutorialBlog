<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{

    // 一覧画面
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $dateStart = $request->input('dateStart');
        $dateEnd = $request->input('dateEnd');

        $posts = Post::when($keyword, function($query) use($keyword)
        {
            // キーワードが入力されているとき
            $query->where(function($query) use($keyword)
            {
                $keyword = mb_convert_kana($keyword, 's');
                $keywords = preg_split("/[\s]+/", $keyword);

                // タイトル内で絞り込む
                $query->orWhere(function($query) use($keywords)
                {
                    foreach ($keywords as $word)
                    {
                        $query->Where('title','LIKE','%'.$word.'%');
                    }
                });

                // 本文内で絞り込む
                $query->orWhere(function($query) use($keywords)
                {
                    foreach ($keywords as $word)
                    {
                        $query->Where('content','LIKE','%'.$word.'%');
                    }
                });
            });
        })->when($dateStart, function($query) use($dateStart, $dateEnd)
        {
            $query->when($dateEnd, function($query) use($dateStart, $dateEnd)
            {
                // 日付が両方入力されているとき
                $query->whereBetween('created_at', [$dateStart, $dateEnd]);
            });
        })->orderBy('id', 'desc')->paginate(20);
        return view('index', compact('posts', 'keyword', 'dateStart', 'dateEnd'));
    }

    // 登録（投稿）
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:30'
        ]);
        $post = Post::create($request->all());
        return redirect()->route('posts.index')->with('status', '作成');
    }

    // 作成画面
    public function create()
    {
        $post = new Post;
        return view('create', compact('post'));
    }

    // 詳細
    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    // 更新
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|max:30'
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('status', '更新');
    }

    // 削除
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('status', '削除');
    }

    // 削除確認画面
    public function delete(Post $post)
    {
        return view('delete', compact('post'));
    }

    // 編集画面
    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

}
