<?php


if(isset($_POST['author']))
{

$connect= mysqli_connect("localhost:3307","root","","notify-demo");
$user =mysqli_real_escape_string($connect,$_POST['author']);
$comment =mysqli_real_escape_string($connect,$_POST['comment']);


$query="INSERT INTO comments( comment_author, comment_body) VALUES ('$user','$comment')";

	mysqli_query($connect,$query);
	

}
else{
	echo "hello world";
}


?>