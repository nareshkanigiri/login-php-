<?php
include'dbh.php';
$Username= $_POST['Username'];
 $Password=$_POST['Password'];
	$sql="select * from login;";
	$query=mysqli_query($conn,$sql);
		switch ($query)
		{
		case($Username=="vaibhav" AND $Password=="abcd12"):
		$arr=array("status"=>200 ,"msg"=>"success");
		$my_json=json_encode($arr);
		echo $my_json;
		break;

		case($Username=="vaibhav" AND $Password=="abcd"):
		$arr1=array("status"=>201 ,"msg"=>"Failure: password should be of length 6");
		$my_json=json_encode($arr1);
		echo $my_json;
		break;

		case($Username=="vaibhav" AND $Password=="abcdef"):		
		$arr2=array("status"=>202 ,"msg"=>"Failure: password to have 1 character and 1 number");
		$my_json = json_encode($arr2);
		echo $my_json;
		break;

		case($Username=="1234" AND $Password=="abcd12"):
		$arr3=array("status"=>203 ,"msg"=>"Failure: only characters allowed in username");
		$my_json = json_encode($arr3);
		echo $my_json;
		break;
		}
?>