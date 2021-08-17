<?php
//error_reporting(0);
include('connection.php');
// if(isset($_POST['submit']))
//   {
    // echo '<pre>';
    // print_r($_POST);
    // exit;
    if(isset($_POST["id"]) && !empty($_POST["id"])){
      // Get hidden input value
      $id = $_POST["id"];

   $name=$_POST['name'];
 
   $address=$_POST['address'];
   $salary=$_POST['salary'];

    //Query for data updation
     $q=mysqli_query($conn, "UPDATE employee SET name='$name',address='$address',salary='$salary' where id='$id'");
     // echo $q;
     // exit;
    if ($q) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script > document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title></title>
    <style>
        .container
        {
            padding:30px;
        }
       
        </style>
  </head>
  <body>
  <div class="container">
     <div class="text"> <h2>Update Employee Details </h2></div>
     <form method="POST">
     <?php
    $id=$_GET['id'];

    $res=mysqli_query($conn,"select * from employee where id='$id'");
    while ($row=mysqli_fetch_array($res)) {
?>
<input type="hidden" name="id" value="<?php  echo $row['id'];?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php  echo $row['name'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="<?php  echo $row['address'];?>" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Salary</label>
    <input type="text" class="form-control" name="salary" value="<?php  echo $row['salary'];?>" id="exampleInputPassword1">
  </div>

  <button type="submit" value="submit" class="btn btn-primary">Submit</button>
  <?php }?>
</form>
    
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>