<!DOCTYPE html>
<html>
<head>
	<title>Notifi-demo</title>
	<!-- bs stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- my stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Notifi-demo</a>

 
</nav>	



<!-- comment form -->

<div class="row">

	<div class="col-md-6 mt-5 ml-5">
		<h3 class="text-center">Comment Box</h3>
<form action="insert.php" method="post" id="comment-form">
  <div class="form-group">
    <label for="uname">User name</label>
    <input type="text" class="form-control" name="author" id="uname"  placeholder="Enter name">
   
  </div>
   <div class="form-group">
    <label for="comment">Comment</label>
    <textarea type="text" class="form-control" name="comment" id="comment" rows="5" ></textarea>
  
  </div>
 
  <button type="submit" class="btn btn-primary">Add comment</button>
</form>

		
	</div>
	
</div>






</div>









<!-- bs scripts -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- my scripts -->
<script type="text/javascript" >
	
$(document).ready(function(){

$("#comment-form").on("submit",function(event){

event.preventDefault();

if($("#uname").val() !='' && $("#comment").val() !='')
{


var form_data=$(this).serialize();

$.ajax({
url:"insert.php",
method:"POST",
data:form_data,
success:function(data){
	$("#comment-form")[0].reset();

}


});

}
else
{
	alert("Both fields are required");
}

});

});


</script>
</body>
</html>
