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
	<div class="col-md-8 blog-main">
		<h3 class="pb-4 mb-4 font-italic border-bottom">
			From the Firehose
		</h3>

		<div class="blog-post">
			<h2 class="blog-post-title">Sample blog post</h2>
			<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

			<p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
			<hr>
			<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
			<blockquote>
				<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</blockquote>
			<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
			<h2>Heading</h2>
			<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			<h3>Sub-heading</h3>
			<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
			<pre><code>Example code block</code></pre>
			<p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
			<h3>Sub-heading</h3>
			<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<ul>
				<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
				<li>Donec id elit non mi porta gravida at eget metus.</li>
				<li>Nulla vitae elit libero, a pharetra augue.</li>
			</ul>
			<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
			<ol>
				<li>Vestibulum id ligula porta felis euismod semper.</li>
				<li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
				<li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
			</ol>
			<p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
		</div><!-- /.blog-post -->

		<div class="blog-post">
			<h2 class="blog-post-title">Another blog post</h2>
			<p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

			<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
			<blockquote>
				<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</blockquote>
			<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
			<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
		</div><!-- /.blog-post -->

		<div class="blog-post">
			<h2 class="blog-post-title">New feature</h2>
			<p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

			<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<ul>
				<li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
				<li>Donec id elit non mi porta gravida at eget metus.</li>
				<li>Nulla vitae elit libero, a pharetra augue.</li>
			</ul>
			<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
			<p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
		</div><!-- /.blog-post -->

		<nav class="blog-pagination">
			<a class="btn btn-outline-primary" href="#">Older</a>
			<a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
		</nav>

	</div><!-- /.blog-main -->

	<aside class="col-md-4 blog-sidebar">
		<div class="p-4 mb-3 bg-light rounded">
			<h4 class="font-italic">About</h4>
			<p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		</div>

		<div class="p-4">
			<h4 class="font-italic">Archives</h4>
			<ol class="list-unstyled mb-0">
				<li><a href="#">March 2014</a></li>
				<li><a href="#">February 2014</a></li>
				<li><a href="#">January 2014</a></li>
				<li><a href="#">December 2013</a></li>
				<li><a href="#">November 2013</a></li>
				<li><a href="#">October 2013</a></li>
				<li><a href="#">September 2013</a></li>
				<li><a href="#">August 2013</a></li>
				<li><a href="#">July 2013</a></li>
				<li><a href="#">June 2013</a></li>
				<li><a href="#">May 2013</a></li>
				<li><a href="#">April 2013</a></li>
			</ol>
		</div>

		<div class="p-4">
			<h4 class="font-italic">Elsewhere</h4>
			<ol class="list-unstyled">
				<li><a href="#">GitHub</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Facebook</a></li>
			</ol>
		</div>
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
