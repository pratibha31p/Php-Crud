<?php
include('connection.php');
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$address=$_POST['address'];
	$salary=$_POST['salary'];

	$query=mysqli_query($conn,"INSERT INTO vehicles (name,address,salary) VALUES ('$name','$address','$salary')");
	 if ($query) {
	 	
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script > document.location ='vehicles.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

	}


?>