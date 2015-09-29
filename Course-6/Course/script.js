$(document).ready(function() {
$("#method").on("change", function()//listener {
	if($("#method option:selected").text()=="GET"){
	  	$("#form2").attr("method", "GET");
	  	$("#form2").attr("action", "get.php");
 	 }
	
	if($("#method option:selected").text()=="POST"){
	  	$("#form2").attr("method", "POST");
	  	$("#form2").attr("action", "post.php");
	  }
  });

});
