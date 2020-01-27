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

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2  mt-lg-0 navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="#">Admin Panel</a>
      </li>
     
      <li class="dropdown">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"><span class="badge badge-light count"></span> Notification  </a>
        <ul class="dropdown-menu">
          
        </ul>


      </li>

    </ul>
   

      

  </div>
</nav>	


<div class="row">
  
  <div class="col-md mt-2">
    
    <h1 class="text-center">Dashboard</h1>


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
<script type="text/javascript">
  
$(document).ready(function(){



function load_unseen_notification(view="")
{


  $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{view:view},
    dataType:"json",
    success:function(data){
      $(".dropdown-menu").html(data.notification);

      if(data.unseen_notification > 0)
      {
    
        $(".count").html(data.unseen_notification);

      }

     }
  });


}
load_unseen_notification();
 


// after clicking on notify tab
$(document).on("click",".dropdown-toggle",function(){

 $(".count").html('');
 load_unseen_notification("yes");

});



// check for notification after every 5 sec
setInterval(function(){

load_unseen_notification();

},2000);



});





</script>
</body>
</html>
