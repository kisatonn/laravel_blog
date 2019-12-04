<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminBlogRequest;
use App\Article;

class AdminBlogController extends Controller
{
    protected $article;

    function __construct(Article $article)
    {
        // Article モデルクラスのインスタンスを作成
        // 「依存注入」により、コンストラクタの引数にタイプヒントを指定するだけで、
        // インスタンスが生成される（コンストラクターインジェクション）
        $this->article = $article;
    }


    public function form(int $article_id = null)
    {
        // メソッドの引数に指定すれば、ルートパラメータを取得できる
        // Eloquent モデルはクエリビルダとしても動作するので find メソッドで記事データを取得
        // 返り値は null か App\Models\Article Object
        $article = $this->article->find($article_id);
        // 記事データがあれば toArray メソッドで配列にしておき、フォーマットした post_date を入れる
        $input = [];
        if ($article) {
            $input = $article->toArray();
            $input['post_date'] = $article->post_date_text;
        } else {
            $article_id = null;
        }
        // old ヘルパーを使うと、直前のリクエストのフラッシュデータを取得できる
        // ここではバリデートエラーとなったときに、入力していた値を old ヘルパーで取得する
        // DBから取得した値よりも優先して表示するため、array_merge の第二引数に設定する
        $input = array_merge($input, old());
        // View テンプレートへ値を渡すときは、第二引数に連想配列を設定する
        // View テンプレートでは 連想配列のキー名で値を取り出せる
//        return view('admin_blog.form', ['input' => $input, 'article_id' => $article_id]);
        // compact 関数を使うと便利
        return view('admin_blog.form', compact('input', 'article_id'));
    }
    public function post(AdminBlogRequest $request)
    {
        // 入力値の取得
        $input = $request->input();
        $article_id = array_get($input, 'article_id');

        $article = $this->article->updateOrCreate(compact('article_id'), $input);
        // フォーム画面にリダイレクト。その際、route メソッドの第二引数にパラメータを指定できる
        return redirect()
            ->route('admin_form', ['article_id' => $article->article_id])
            ->with('status', '記事を保存しました');
    }
    public function delete(AdminBlogRequest $request)
    {
        // 記事IDの取得
        $article_id = $request->input('article_id');

        $result = $this->article->destroy($article_id);
        $message = ($result) ? '記事を削除しました' : '記事の削除に失敗しました。';

        // フォーム画面へリダイレクト
        return redirect()->route('admin_form')->with('message', $message);
    }


}
