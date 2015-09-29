
<?php
$numeH1 = "Perfect Rent";
$numeH2 = "Demire Fertasede";
$numeH3A = "Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem.";
$numeH3B = "Praesent justo dolor, lobortis quis.";
$paragraph1 = "<u>Aliquam dapibus tincidunt metus.</u>Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi...Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. <br>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Fusce suscipit varius mi.</strong> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.";
$paragraph2 = "Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.";
$paragraph3 = "Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.";
?>


<!DOCTYPE HTML SYSTEM>
<html>
	<head>
		<title>Perfect Recent</title>
		<link rel="stylesheet" type="text/css" href="style.css" >
	</head>
	<body>
	<div class="bigContainer">
		<div class="sectiuneaTitlu">
			<h1><?php echo $numeH1; ?></h1>
			<ul>
				<li class="main"><a href="#">Main</a></li>
				<li class="bara"> / </li>
				<li class="blog">Blog</li>
			</ul>
		</div><!--inchide div class "sectiuneaTitlu"-->

		<div class="sectiunea1">
			<div class="left">
				<div class="postOne">
					<h2 class="titlePost"><a href="#" title="Demire Fertasede"><?php echo $numeH2; ?></a></h2>
					<a href="#"><img src="imagini/img1.jpg" alt="img1" /></a>
					<div class="info">
						<h3><?php echo $numeH3A; ?></h3>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $paragraph1; ?> </p><hr>
						<h3><?php echo $numeH3B; ?></h3>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $paragraph2; ?></p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $paragraph3; ?></p>
						<a href="#" class="button">READ MORE</a>
					</div><!--inchide div class "info"-->
				</div><!--inchide div class "postOne"-->
			</div><!--inchide div class "right"-->
			<div class="right">
				<h3>Categories</h3>
				<ul>
					<li class="item"><a href="#">At velit etiam adipiscing</a></li>
					<li class="item"><a href="#">Dictum urna rutrum scelerisque</a></li>
					<li class="item"><a href="#">Egestas vel mattis eget tincidunt</a></li>
					<li class="item"><a href="#">Morbi vitae dignissim nisi</a></li>
					<li class="item"><a href="#">Trpis ut augue laoreet rutrum</a></li>
					<li class="item"><a href="#">Uncategorized</a></li>
					<li class="item"><a href="#">Ut consequat est sapien vitae</a></li>
				</ul>
				<div class="recent">
					<h3>Recent Posts</h3>
					<div class="newPost">
						<div class="postImg">
							<a href="#"><img src="imagini/img2.jpg" alt="img2" /></a>
						</div><!--inchide div class "postImg"-->
						<time datetime="2015-06-17H:12">17/06/2015</time>
						<h4><a href="#" title="Permanet Link To Demire Fertasede">Demire Fertasede</a></h4>
						<div class="info">
							<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis...</p>
							<a href="#" class="button"> MORE</a>
						</div> <!-- inchide div calss "info"-->
					</div><!--inchide div class "newPost"-->
					<div class="newPost two">
						<div class="postImg">
							<a href="#"><img src="imagini/img3.jpg" alt="img3" /></a>
						</div><!--inchide div class "postImg"-->
						<time datetime="2015-06-17H:12">19/06/2015</time>
						<h4><a href="#" title="Donec augue">Donec augue</a></h4>
						<div class="info">
							<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis...</p>
							<a href="#" class="button"> MORE</a>
						</div> <!-- inchide div calss "info"-->
					</div><!--inchide div class "newPost"-->
				</div><!--inchide div class "recent"-->
			</div><!--inchide div class "left"-->
		</div><!--inchide div class "sectiunea1"-->

	</div><!--inchide div class "Big container"-->
	<div class="footer">
		<ul>
			<li class="item1"><a href="#"><img src="imagini/img4.jpg" alt="img4" /></a></li>
			<li class="item2">
				<ul>
					<li class="item"><a href="#"><span class="social_label">facebook</span></a><li>
					<li class="item"><a href="#"><span class="social_label">twitter</span></a></li>
					<li class="item"><a href="#"><span class="social_label">goggle+</span></a></li>
				</ul>
			</li>
			<li class="item3">
				<ul>
					<li class="item"> &copy; 2015</li>
					<li class="item"><a href="#" title="Privacy Policy">Privacy Policy</a></li>
				</ul>
			</li>
		</ul>


	</div><!--inchide div class "footer"-->
	</body>
</html>