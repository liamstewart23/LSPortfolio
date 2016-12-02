<?php
	require_once("../admin/phpscripts/init.php");
	$tbl="tbl_blog";
	$getPosts = getAll($tbl);
	//echo $getPosts;
?>
<section id="blog">
	<h2 class="hidden">Blog Posts by Liam Stewart</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1"><h2>Blog</h2></div>
		<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1"><h3>My thoughts, beliefs and complaints.</h3></div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2" id="blog-posts">
			<?php
			if(!is_string($getPosts)){
			while($row = mysqli_fetch_array($getPosts)){
			echo "<h1>{$row['b_title']}</h1>";
			echo "<span>Posted: {$row['b_date']} by {$row['b_author']}</span><br><br>";
			echo "<a href=\"includes/post.php?idea={$row['b_id']}\">Read Post...</a><br><br>";
			}
			} else {
			//echo "nope...";
			}
			?>
		</div>
	</div>
</section>
