<?php
	if(!isset($_COOKIE['visits'])){
		setcookie('visits','1',time()+3600);
		print "Hello!";
	}
	else{
		if($_COOKIE['visits'] <= 3){
			setcookie('visits',$_COOKIE['visits']+1,time()+3600);
			print "Hello again!";
		}
		else {
			setcookie('visits',null,time()-3600);
			print "Goodbye!";
		}
	}
?>