<?php include 'head.php'; ?>
<?php include 'header.php'; ?>
<?php
	if(isset($_SESSION['user_email'])){
		header("location: profile.php"); //daca logat, nu mai are acces la pagina de login
	}
?>
			<div class = "login container">
				<?php
				if (isset($_POST['email']) && isset($_POST['password'])){
					include 'connect.php'; 
					$email = $_POST['email'];
					$password = $_POST['password'];
					$select = mysqli_query($db,"
						SELECT * 
						FROM clienti 
						WHERE `email`='$email' and `password`=MD5('$password')");
					if(mysqli_num_rows($select)){
						echo '<script language="javascript">';
						echo 'alert("Date de autentificare valide!")';
						echo '</script>';

						$_SESSION['user_email'] = $email;
						header("location: profile.php"); 

					}else{
						echo '<script language="javascript">';
						echo 'alert("Date de autentificare invalide!")';
						echo '</script>';
					}
					mysqli_close($db);
				}
				?>
				<div class = "newclients col-md-6">
					<h3>Clienţi noi</h3>
					<p>În urma înregistrării pe site-ul nostru,vei putea adauga oferte mai rapid, vei putea vedea ofertele si serviciile imobiliare: vanzari si inchirieri apartamente, case-vile, spatii comerciale, birouri, terenuri şi urmări ofertele din contul tău şi multe altele.</p>
					<div class="line"></div>
					<div class = "btn-register ">
						<button type="button" title="Creeaza un cont" class="button btn btn-sm btn-default" onclick="window.location='http://localhost/fasttrackit_php/lena/ProiectIndividial/register.php';">
						<span>Creeaza un cont</span>
						</button>
					</div>
				</div>
				<div class="col-md-6 clients">
					<h3>Clienţi existenţi</h3>
					<p>Dacă ai deja cont, te rugăm să te autentifici.</p>
				    <div class="panel panel-default">
						<div class="panel-heading">
					  		<h3 class="panel-title"><strong>LogIn</strong></h3>
					  	</div>
					  	<div class="panel-body">
						   	<form name = "login_form" method = "POST" action = "" id="login-form">	
							  	<div class="form-group">
							    	<label for="exampleInputEmail1">Username or Email</label>
							    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"/>
							  	</div>
							  	<div class="form-group">
							    	<label for="exampleInputPassword1">Password</label>
							    	<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
							  	</div>
							  	<div class = "submit">
							  		<input type="submit" class="btn btn-md btn-default" value ="Sign in" title="Sign in"/>
							  	</div>
							</form>
						</div>
					</div>
				</div>
			</div>
				<?php 
						unset($_POST); // destroys the specified variables.

				?>











<?php include 'footer.php'; ?>
				
