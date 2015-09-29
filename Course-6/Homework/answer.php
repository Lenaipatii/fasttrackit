<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<script>
	function goBack() {
	    window.history.back();
	}
</script>

	<div class = "middle">
		<div class ="answer">
			<h3>Your Answers!</h3>
		<?php
			include 'connect.php';
			$email = $_POST['email'];
			$select = mysql_query("SELECT email FROM users WHERE email = '$email'") or exit(mysql_error());
			if(mysql_num_rows($select)){
		?>
				<h4>Registration Faild</h4>
				<div>Userul cu emailul <?php echo $email ?> exista deja.</div>

		<?php
    		}
		?>
			<ol>
				<li>
					<?php
						$name = $_POST['name'];
						$email = $_POST['email'];
						if (isset($_POST['name'])){
							print "Numele dumnevoastra este: ".$_POST['name'];
						};
					?>
				</li>
				<li>
					<?php
						if (isset($_POST['email'])){
							print "Email-ul dumnevoastra este: ".$_POST['email'];
						};
					?>
				</li>
				<?php
					mysql_query("
						INSERT INTO users (name, email) 
						VALUES ('$name',('$email'))"
					);
					$ID_Users = mysql_query("SELECT ID_Users FROM users WHERE email = '$email'") or exit(mysql_error());
					$ID_Users = mysql_result($ID_Users,0);
				?>
				<li>
					<?php
						if(!empty($_POST['bought'])) {
							$check_values = "";
							$check_insert = "";
							print "You bought: ";
				    		foreach($_POST['bought'] as $check) {
				            	 $check_values .= $check.', ';
				            	 $check_insert .= '("'.$check.'","'.$ID_Users.'"),';
				    		}
				    		$check_values = trim($check_values,", ");//remove last character (virgula)
				    		$check_insert = trim($check_insert,",");
				    		print $check_values; 
				    		mysql_query("
								INSERT INTO bought (feedback, ID_Users) 
								VALUES $check_insert
							");

						}
						else {
							print "Nu ati selectat nimic! ";
						}
					?>
				</li>
				<li>
					<?php
						if (isset($_POST['tasted'])){   // if ANY of the options was checked
					 		print " You tasted: ".$_POST['tasted'];    // echo the choice
						  	$tasted = $_POST['tasted'];
						  	mysql_query("
								INSERT INTO tasted (feedback, ID_Users) 
								VALUES ('$tasted','$ID_Users')"
							);
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}

					?>
				</li>
				<li>
					<?php
						if (isset($_POST['style'])){   
					 		print " The STYLE was: ".$_POST['style'];
					 		$style = $_POST['style'];
						  	mysql_query("
								INSERT INTO style (feedback, ID_Users) 
								VALUES ('$style','$ID_Users')"
							);    
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
				<li>
					<?php
						$check_insert = "";
						if (isset($_POST['purchase'])){  
					 		print " The purchase you made: ".$_POST['purchase']; 
					 		$purchase = $_POST['purchase'];   
					 		$check_insert .= '("The purchase you made","'.$purchase.'","'.$ID_Users.'"),';
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
				<li>
					<?php
					
						if (isset($_POST['service'])){  
					 		print "The service you recieved: ".$_POST['service']; 
					 		$service = $_POST['service'];  
					 		$check_insert .= '("The service you recieved","'.$service.'","'.$ID_Users.'"),';
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
				<li>
					<?php
				
						if (isset($_POST['company'])){ 
					 		print "Our company overall: ".$_POST['company']; 
					 		$company = $_POST['company'];  
					 		$check_insert .= '("Our company overall","'.$company.'","'.$ID_Users.'"),';
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
				<?php
					$check_insert = trim($check_insert,",");
					mysql_query("
								INSERT INTO satisfaction (information,feedback, ID_Users) 
								VALUES $check_insert
							");
				?>
				<li>
					<?php
						$check_insert = "";
						if (isset($_POST['buyagain'])){  
					 		print "Buy from us again: ".$_POST['buyagain'];
					 		$buyagain = $_POST['buyagain']; 
					 		$check_insert .= '("Buy from us again","'.$buyagain.'","'.$ID_Users.'"),';  
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
				<li>
					<?php
						if (isset($_POST['products'])){  
					 		print "Recommend our products to others: ".$_POST['products'];
					 		$products = $_POST['products']; 
					 		$check_insert .= '("Recommend our products to others","'.$products.'","'.$ID_Users.'"),';   
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
					<li>
					<?php
						if (isset($_POST['shop'])){  
					 		print "Recommend our shop to others: ".$_POST['shop']; 
					 		$shop = $_POST['shop'];
					 		$check_insert .= '("Recommend our shop to others","'.$shop.'","'.$ID_Users.'"),';   
						}
						else{
					  		print"Nu ati selectat nimic!";
					  	}
					?>
				</li>
				<?php
					$check_insert = trim($check_insert,",");
					mysql_query("
								INSERT INTO likely (information,feedback,ID_Users) 
								VALUES $check_insert
							");
				?>
			</ol>
			<div class = "button ">
				<button onclick="goBack()">Go Back</button>
			</div>

		</div>
	</div><!---inchide div class middle-->
<?php mysql_close($db); ?>
<?php include 'footer.php'; ?>