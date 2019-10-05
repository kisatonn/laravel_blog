<DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Nocca Home Page</title>
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
	  <a class="navbar-brand" href=""><img src="images/logo.png" width="200px"></a>
			<!--画面を小さくした時 -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon">
			</span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
	      </li>
				<li class="nav-item active">
	        <a class="nav-link" href="/blog/">Blog<span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>
<div class="pull-left" style="width: 200px;">
  <img src="images/hometop.JPG" width="450%">
</div>
<div　class="container" style="width: 300px;">
	<h2>Profile</h2>
	<img src="images/profile.png"  width="200px">
	<h4>ジュリー</h4>
	<p>岐阜県在住</p>
	<p> farmersmarket＆cafe nocca というcafeで働いています。</p>
	<p>cafeのホームページを作っているうちに、コードに興味を持つ。</p>
	<p>プログラミング歴半年ぐらい。</p>
</div>
<div class="categories">
	<div class="cooking">
		<a href ="">料理</a>
	</div>
	<div class="nutrition">
		<a href ="">栄養</a>
	</div>
	<div class="agriculture">
		<a href ="">農業</a>
	</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>

<div class="row mb-2">
	<div class="col-md-6">
		<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			<div class="col p-4 d-flex flex-column position-static">
				<strong class="d-inline-block mb-2 text-primary">World</strong>
				<h3 class="mb-0">Featured post</h3>
				<div class="mb-1 text-muted">Nov 12</div>
				<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-auto d-none d-lg-block">
				{% include icons/placeholder.svg width="200" height="250" background="#55595c" color="#eceeef" text="Thumbnail" %}
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
			<div class="col p-4 d-flex flex-column position-static">
				<strong class="d-inline-block mb-2 text-success">Design</strong>
				<h3 class="mb-0">Post title</h3>
				<div class="mb-1 text-muted">Nov 11</div>
				<p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="stretched-link">Continue reading</a>
			</div>
			<div class="col-auto d-none d-lg-block">
				{% include icons/placeholder.svg width="200" height="250" background="#55595c" color="#eceeef" text="Thumbnail" %}
			</div>
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
