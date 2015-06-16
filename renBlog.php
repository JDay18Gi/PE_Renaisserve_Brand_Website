<?php
require('blog/wp-blog-header.php');
?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="css/Normalize.css">
	<link rel="stylesheet" href="css/renMainCSS.css">
	<link href="http://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="images/REN_favicon.png">
	<title>enaisserve-Blog</title>
</head>

<body id="blog">

	<header>

		<div class="titles">
			<a href="renHome"></a><h1>Renaisserve</h1></a>
			<h3>Be More. Do More. For Others.</h3>
		</div>

		<nav>
			<p><a href="renAbout">About</a></p>
			<div id="areas">
				<p>+Areas</p>
				<ul id="list">
					<li id="health"><a href="renHealth">Health</a></li>
					<li id="learn"><a href="renLearning">Learning</a></li>
					<li id="econ"><a href="renEcon">Economics</a></li>
				</ul>
			</div>
			<p><a href="renBlog">Blog</a></p>
			<p><a href="renContact">Contact</a></p>
		</nav>

	</header>

	<main>

		<?php
			global $post;
			$args = array( 'posts_per_page' => 6 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>

			<h1><?php the_title(); ?></h1>

			<br/>

			<?php the_content(); ?>

			<br>

			<?php endforeach; ?>

		?>


	</main>

	<aside>
		<h2>topics</h2>
		<P>
			<a href="http://example.com" target="_blank">Example Topic</a>,
			<a href="http://example.com" target="_blank">Example Topic</a>,
			<a href="http://example.com" target="_blank">Example Topic</a>,
			<a href="http://example.com" target="_blank">Example Topic</a>.
		</p>
	</aside>

	<footer>

		<div class="social">
			<a href="https://www.facebook.com/Renaisserve" target="_blank"><img src="images/faded_facebook.png" alt="facebook link" height="60" width="60"></a>
			<a href="https://www.youtube.com/channel/UCQ3PX1gMi-Lxt7pnM0WyAxA" target="_blank"><img src="images/faded_youtube.png" alt="youtube link" height="60" width="60"></a>
		</div>

	</footer>

</body>

	<script src="js/renJQuery.js"></script>
	<script src="js/ren.js"></script>

</html>