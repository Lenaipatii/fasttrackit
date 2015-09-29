<?php include 'head.php'; ?>
<?php include 'header.php'; ?>

<?php
   if(isset($_POST['submit']))
   {
   	//This page should not be accessed directly.Need to Submit the form.
   	echo "Eroare! Trebuie sa transmiteti formularul!";
   }

   //collect the data
    $name = $_POST['name'];
  	$visitor_email = $_POST['email'];
  	$message = $_POST['message'];

  	//validate first
  	if(empty($name) || empty($visitor_email) || empty($message))
  	{
  		echo "Toate campurile sunt obligatorii!";
  		exit;
  	}

  	$email_from = "studenti.practica@gmail.com";//put your email adress here
  	$email_subject = "New form submission";
  	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
    $to = "studenti.practica@gmail.com";
 	  $headers = "From: $email_from \r\n";
 	  $headers .= "Reply-To: $visitor_email \r\n";
 
 	//sent email
  	mail($to,$email_subject,$email_body,$headers);//done, redirect to thank-you page

  ?>

<div class = "thank-you container"> 
	<div class ="container fluid col-sm-12">
		<h1>Multumim!</h1>
		<p>Messajul dumneavoastra a fost inregistrat cu success! </p>
		<p>In cel mai scurt timp veti fi contactat de unul dintre consilierii nostri!.</p>
	</div>
</div>

<?php include 'footer.php'; ?>