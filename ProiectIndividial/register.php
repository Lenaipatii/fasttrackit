<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<?php
	if(isset($_SESSION['user_email'])){
		header("location: profile.php"); //daca logat, nu mai are acces la pagina de Register
	}
?>
		
		<div class="register container container-fluid">
    		<section class="container">
			<?php
				if (isset($_POST['email']) && isset($_POST['password'])){
					include 'connect.php'; 
						$username = $_POST['username'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$select = mysqli_query($db,"SELECT email FROM clienti WHERE email = '$email'");
						if(mysqli_num_rows($select)){
			?>
				<div class = "register_message col-sm-12">
					<h2>Inregistrare esuata!</h2>
					<p>Buna ziua Dna./Dn. <?php echo $username ?>,</p> 
					<p>User-ul cu emailul <?php echo $email ?> exista deja in baza noastra de date!</p>
					<p>Va rugam sa incercati sa va inregistrati cu alta adresa de email !</p>
					<p>Va multumim!</p>
					<div class = "button">
						<a href="register.php" class="btn btn-md btn-default" title="Register" >Register</a>
					</div>
				</div>
				<?php
		    		}else{
						mysqli_query($db,"
							INSERT INTO clienti (username,email,password) 
							VALUES ('$username','$email',MD5('$password'))
						");
				?>
				<div class = "register_message col-sm-12">
					<h2>Inregistrare cu succes!</h2>
					<p>Buna ziua Dna./Dmn. <?php echo $username ?>,</p>
					<p>Contul dumnevoastra cu adresa de email <?php echo $email ?> a fost creat.</p>
					<p>Va multumim!</p>
					<div class = "button">
						<a href="login.php" class="btn btn-md btn-default" title="LogIn" >LogIn</a>
					</div>
				</div>
				<?php
					}
					mysqli_close($db);	
				}
				else{
				?>
				<div class="container-page">
				<form name = "register_form" method = "POST" action = "" id="register-form">				
					<div class="col-md-6">
						<div class = "username form-group col-lg-12">
							<h3 class="dark-grey">Registration</h3>
							<label for = "username"> Numele:  </label>
							<input type = "text" class="form-control" Name = "username" placeholder = "Username"/>
						</div>
						<div class = "e_mail form-group col-lg-12"> 
							<label for = "email"> Email:  </label>
							<input type = "email" class="form-control" Name = "email" placeholder = "Email address"/>
						</div> 
						<div class = "password form-group col-lg-6">
							<label for = "password"> Password:  </label>
							<input type = "password" class="form-control" Name = "password" maxlength="20" placeholder = "Password" id="password" />
						</div>
						<div class = "password_again form-group col-lg-6">
							<label for = "password_again"> Password again: </label>
							<input type = "password" class="form-control" Name = "password_again" maxlength="20" placeholder = "Password again"/>
						</div>				
					</div>
					<div class="col-md-6">
						<h3 class="dark-grey">Terms and Conditions</h3>
						<p>By clicking on "Register" you agree to The Company's' Terms and Conditions</p>
						<p>While rare, prices are subject to change based on exchange rate fluctuations
							should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price.</p>
						<p>Should there be an error in the description or pricing of a product, we will provide you with a full refund.</p>
						<p>Acceptance of an order by us is dependent on our suppliers ability to provide the product.</p>
						<div class="line"></div>
						<div class = "submit">
							<input type = "Submit" class = "btn btn-md btn-default" Name = "Submit" value = "Register"/>
						</div>
					</div>
				</form>
					
				</div>
				<?php 
						}
						unset($_POST); // destroys the specified variables.

				?>
			</section>
		</div>
		<!--end middle-->		
<?php include 'footer.php'; ?>