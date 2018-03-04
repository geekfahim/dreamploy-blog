<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dreamploy | Blog</title>
	<?php include('header.php') ?>
</head>
<body>
<div class="container-fluid">
		<div class="row">
		<div class = "frame col-xs-6 col-md-4">
			<img src = "image/newsad.jpg" class="img-thumbnail">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
				<a href="#"><button class="btn btn-sm btn-danger">More</button></a>	
			</div>			
		</div>
	<div class = "frame col-xs-6 col-md-4">
			<img src = "image/newsad.jpg" class="img-thumbnail">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
				<a href="#"><button class="btn btn-sm btn-danger">More</button></a>	
			</div>			
	</div>
	<div class = "frame col-xs-6 col-md-4">
			<img src = "image/newsad.jpg" class="img-thumbnail">
			<div class = "details">
				<h1>Lorem</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lorem nunc, sollicitudin a nisi sodales, imperdiet dignissim enim. Nam sapien quam</p>
				<a href="#"><button class="btn btn-sm btn-danger">More</button></a>	
			</div>			
	</div>	

		
	</div>
</div>
<div class="m-t-20"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<img src="image/ad1.jpg" class="img-fluid" alt="">
		</div>		<div class="col-md-6">
			<img src="image/ad1.jpg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="post clearfix m-t-40">
<div class="container-fluid">
	 <div class="row">
	    <div class="col-md-8 offset-md-1">
			 <h2 class="read-caption">Today in Bangladesh</h2>
					<img src="image/slider.jpg" class="img-fluid" alt="Responsive image">
				 <div class="post-content">
					<div class="m-t-100"></div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
					</p>	
				</div>			
		<div class="post m-t-5 m-b-5">
					<img src="image/mc_banner.jpg" class=" wi-100 float-left" alt="ads">
		</div>
	<div class="post m-t-5 m-b-5">

				<h4>Comment Here</h4>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			    <button class="btn btn-md btn-primary m-t-10 float-right">Post</button>
	</div>
<div class="share  m-t-10">
			<div class="share-social">
				<a href="#" class="nav-link float-left"><i class="fas fa-share-alt"></i></a>
				<a href="#" class="nav-link float-left"><i class="fab fa-facebook-square"></i></a>
				<a href="#" class="nav-link float-left"><i class="fab fa-twitter-square"></i></a>
				<a href="#" class="nav-link float-left"><i class="fab fa-pinterest-square"></i></a>
	</div>
</div>	
<div class="post m-b-20">
	  <div class="container">
		<div class="col-md-12">
			<img src="image/pasta.gif" alt="Adv" class="img-fluid">
		</div>
		</div>
	<input type="button" name="" class="comment-btn" value="View Comment">
		<div class="comment m-t-50" style="display: none">	
				<img src="image/avatar.jpg" style="width: 30px" class="img-thumbnail">
				<span class="">My name</span><br>
				<p>This is my comment.This is my comment.This is my comment</p>
		</div>
		<div class="comment m-t-50" style="display: none">	
				<img src="image/avatar.jpg" style="width: 30px" class="img-thumbnail">
				<span class="">My name</span><br>
				<p>This is my comment.This is my comment.This is my comment</p>
		</div>	
		<div class="comment m-t-50" style="display: none">	
				<img src="image/avatar.jpg" style="width: 30px" class="img-thumbnail">
				<span class="">My name</span><br>
				<p>This is my comment.This is my comment.This is my comment</p>
		</div>
		<div class="comment m-t-50" style="display: none">	
				<img src="image/avatar.jpg" style="width: 30px" class="img-thumbnail">
				<span class="">My name</span><br>
				<p>This is my comment.This is my comment.This is my comment</p>
		</div>
		<div class="comment m-t-50" style="display: none">	
				<img src="image/avatar.jpg" style="width: 30px" class="img-thumbnail">
				<span class="">My name</span><br>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
	</div>		
	</div>
		<div class="col-md-3">
			<?php include('sidebar.php') ?>
		</div>
</div>
</div>
</div>
	<?php include('footer.php') ?>	
	<script type="text/javascript">
		$(document).ready(function()
		{
			$(".comment-btn").click(function(){
				$(".comment").show();

			});
		});
	</script>
</body>
</html>