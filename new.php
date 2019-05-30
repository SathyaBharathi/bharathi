<?php

print_r($_POST);
if(isset($_POST['submit']))
{
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
}
		
	else
	{ echo "Form not submitted";
	}
	
$servername='localhost';
$user='root';
$password='';
$database='db1';
	
if((!empty($UserName))&&(!empty($Password)))
  {
 
$conn= mysqli_connect($servername, $user, $password, $database); 

if(!$conn)

   {
die('connect_error(' .mysqli_connect_error. ')'. mysqli_connect_error());
   }
else
     {
$select="select * from table1 where UserName='".$UserName."' limit=1";
$insert= "INSERT INTO table1 values('$UserName', '$Password')";
}

	  echo "record created";
if(!mysqli_query($conn,$insert))
{
die('Error:'.$insert.	mysqli_error($conn));
}
else
{
echo " success";
}	
  
  mysqli_close($conn);

  }

?>