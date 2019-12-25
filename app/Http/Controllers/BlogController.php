<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BlogController extends Controller
{
  protected $article;

  function __construct(Article $article)
  {
      // Article モデルクラスのインスタンスを作成
      // 「依存注入」により、コンストラクタの引数にタイプヒントを指定するだけで、
      // インスタンスが生成される（コンストラクターインジェクション）
      $this->article = $article;
  }


  public function list()
  {
      $list = $this->article->getArticleList(10);
      return view('front_blog.blog', compact('list'));
  }
}
