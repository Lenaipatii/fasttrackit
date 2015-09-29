<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php include('session.php'); ?>

	<div id="profile" class="container">
		<h3>Autentificare cu succes!</h3>
		<p>Buna ziua 
			<?php 
				$select_name = mysqli_query($db,"SELECT username FROM clienti WHERE email = '$login_session'");
				$username = mysqli_fetch_assoc($select_name);
				print $username;

			?>
		</p>
		<p>Adresa de email cu care v-ati autentificat este: <?php echo $login_session; ?> !</p>
		<div class="logout">
			<a class="btn btn-md btn-default" href="logout.php" title="Log Out">Log Out</a>
		</div>
	</div>
<?php mysqli_close($db); ?>
<?php include 'footer.php'; ?>