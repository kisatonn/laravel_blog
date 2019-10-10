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
</head>
<body>
	<!--ヘッダー -->
<header class="header">

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!--ロゴ -->
	  <a class="navbar-brand" href=""><img src="images/logo.png" class="img-fluid" width="200px"></a>
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
	<div class="text-center">
	  <img src="images/hometop.jpg" class="img-fluid">
	</div>
	<div class="col-8 mx-auto">
		<div class="categories">
			<div class="cooking">
				<h1>料理</h1>
				<p>旬の食材を使ったレシピをお届けします。</p>
			</div>
			<div class="nutrition">
				<h1>栄養</h1>
				<p>旬の食べ物には栄養がたくさんあります。</p>
			</div>
			<div class="agriculture">
				<h1>農業</h1>
				<p>収穫するのは一瞬でも育てるのは様々な苦労があります。</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="d-none d-md-block col-md-4 mx-auto">
				<h2>Profile</h2>
				<img src="images/profile.png"  class="img-fluid" width="20%">
				<h4>ジュリー</h4>
				<p>岐阜県在住</p>
				<p> farmersmarket＆cafe nocca というcafeで働いています。</p>
				<p>cafeのホームページを作っているうちに、コードに興味を持つ。</p>
				<p>プログラミング歴半年ぐらい。</p>
		</div>
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
