	
	<div class= "header container">
		<div class = "logo">
			<a href = "index.php" ><img src = "imagini/logo.png" alt = "Perfect Rent" title = "Royal apartments for you"/>
				<p class = "logo-text">royal apartments for you</p>
			</a>
		</div>
		<div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">							
						<span  class="icon-bar"></span>
						<span  class="icon-bar"></span>
						<span  class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="mynavbar-content">
					<ul class="nav navbar-nav">
						<li><a href = "index.php">Home</a></li>
						<li><a href = "oferts.php">Oferte</a></li>
						<li><a href = "adauga_oferte.php">Adauga Oferte</a></li>
						<li><a href = "despre_noi.php">Despre noi</a></li>
						<li><a href = "contact.php">Contact</a></li>

						<?php if(isset($_SESSION['user_email'])){ ?>
							<!--<li><a href = "profile.php">My Profile</a></li>-->
							<li><a href = "logout.php">Logout</a></li>
						<?php }else{ ?>
							<li><a href = "login.php">Login</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	