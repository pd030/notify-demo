<?php 


if(isset($_POST["view"]))
{
// 	echo "hellow";
	$connect= mysqli_connect("localhost:3307","root","","notify-demo");

		if($_POST["view"]!= "")
		{
			$update_query=" update comments set comment_status=1 where comment_status=0";
	mysqli_query($connect,$update_query);

		}


	$query="select * from comments order by comment_id desc";

	$result=mysqli_query($connect,$query);
	

	$output='';


	if(mysqli_num_rows($result)>0){

		while ($row=mysqli_fetch_array($result)) {
			$output .='
		<li >
        	<a  href="#">
        	<strong>'.$row["comment_author"].'</strong><br/>
        	<small><em>'.$row["comment_body"].'</em></small>

        	</a>
      	</li>

			';

		}


	}
	else
	{
		$output .='

 		<li >
        <a class="text-bold text-italic" href="#">No notification found</a>
      	</li>
     
		';
	}


$query_1= "select * from comments where comment_status=0";

$result_1= mysqli_query($connect,$query_1);

$count=mysqli_num_rows($result_1);

$data=array(

'notification'=> $output,
'unseen_notification' => $count
);


echo json_encode($data);

}

?>