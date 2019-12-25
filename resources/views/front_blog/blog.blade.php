<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>nocca Form Produce Blog</title>
<meta name="description" itemprop="description" content="説明文">
<meta name="keywords" itemprop="keywords" content="A,B,C">
<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru&display=swap" rel="stylesheet">
<link href="/css/layout.css" rel="stylesheet">
<link href="/css/page.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.archive{
	color: #008000;
	border-bottom: solid #9ACD32;
	display: block;
	margin: 5px;
}
</style>
</head>
<body>
	<!--ヘッダー -->
<header class="header">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!--ロゴ -->
	  <a class="navbar-brand" href=""><img src="{{ asset('images/logo.png') }}" class="img-fluid" width="200px"></a>
			<!--画面を小さくした時 -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon">
			</span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
	      </li>
				<li class="nav-item active">
	        <a class="nav-link" href="/blog/">Blog<span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>
<div　class="container">
	<div class="row">
		<div class="col-lg-8 h-100 text-white text-center bg-success">
			<h1>料理</h1>
			<p>旬の食材を使ったレシピをお届けします。</p>
			<a href="" class="h2 pr-5 pl-5 m-5 text-success bg-white border border-success">肉</a>
			<a href="" class="h2 pr-5 pl-5 m-5 text-success bg-white border border-success">魚</a>
			<a href="" class="h2 pr-5 pl-5 m-5 text-success bg-white border border-success">野菜・果物</a>
		</div>
		<div class="d-none d-lg-block col-md-3 m-3 mx-auto text-center border border-success">
				<h2 class="mt-3 bg-success text-white">Profile</h2>
				<img src="{{ asset('images/profile.png') }}"  class="img-fluid mt-3" width="20%">
				<h4 class="mt-3">ジュリー</h4>
				<p class="mt-3">岐阜県在住</p>
				<p>farmersmarket＆cafe nocca というcafeで働いています。</p>
				<p>cafeのホームページを作っているうちに、コードに興味を持つ。</p>
				<p>プログラミング歴半年ぐらい。</p>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9 col-md-12 m-3">
			<article>
				<h4>いちじくと水菜のサラダ</h4>
				<img src="{{ asset('images/ichigiku.png') }}" class="img-fluid" alt="Responsive image">
			</article>
			@if (count($list) > 0)
					<br>

					{{--links メソッドでページングが生成される。しかも生成されるHTMLは Bootstrap と互換性がある--}}
					{{ $list->links() }}
					<table class="table table-striped">
							<tr>
									<th width="120px">記事番号</th>
									<th width="120px">日付</th>
									<th>タイトル</th>
							</tr>

							{{--このまま foreach ループにかけることができる--}}
							@foreach ($list as $article)
									<tr>
											<td>{{ $article->article_id }}</td>
											<td>{{ $article->post_date_text }}</td>
											<td>
													<a href="{{ route('admin_form', ['article_id' => $article->article_id]) }}">
															{{ $article->title }}
													</a>
											</td>
									</tr>
							@endforeach
					</table>
			@else
					<br>
					<p>記事がありません。</p>
			@endif








		</div>
		<div class="text-center d-none d-lg-block col-md-3 m-3 border border-success">
			<h2 class="mt-3 bg-success text-white">ARCHIVE</h2>
			<ul class="list-unstyled">
				<li><a href="" class="archive">2020年03月</a></li>
				<li><a href="" class="archive">2020年02月</a></li>
				<li><a href="" class="archive">2020年01月</a></li>
				<li><a href="" class="archive">2019年12月</a></li>
				<li><a href="" class="archive">2019年11月</a></li>
				<li><a href="" class="archive">2019年10月</a></li>
			</ul>
	</div>
</div>
<div class="row mb-2">
	<div class="col-md-6">
	</div>
	<div class="col-md-6">
		<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		</div>
	</div>
</div>
</div>

<main role="main" class="container">
<div class="row">
		<nav class="blog-pagination">
			<a class="btn btn-outline-primary" href="#">Older</a>
			<a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
		</nav>

	</div><!-- /.blog-main -->

	<aside class="col-md-4 blog-sidebar">
	</aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
<p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
<p>
	<a href="#">Back to top</a>
</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="/js/page.js"></script>
</body>
</html>
