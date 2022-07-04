<?php
/*
1.connect to the database
2.receive the input from user from registration.php
3.run the sql querry and  add the user to the database
*/
session_start();
$conn=mysqli_connect("localhost","root","","Zomato");
//step-2
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

//step-3
$query="INSERT INTO users VALUES(NULL,'$name','$email','$password')";
//check wehter the email existst or not
$query1="SELECT * FROM users WHERE email LIKE '$email'";
$result=mysqli_query($conn,$query1);
$num_rows=mysqli_num_rows($result);
if($num_rows==0){
		if(mysqli_query($conn,$query))
	{
		echo "registration successful";
		//fetch the details of the registerd user
		$query2= "SELECT * FROM users WHERE email LIKE '$email'";
		$result2=mysqli_query($conn,$query2);
		$result2_arr=mysqli_fetch_assoc($result2);
		$_SESSION['name']=$result2_arr['name'];
		$_SESSION['user_id']=$result2_arr['user_id'];
		header('Location:index.php');
	}
	else{
	header('Location:zom_registration.php?error=0');

	}
}else{
	
	header('Location:zom_registration.php?error=1');
}

?>