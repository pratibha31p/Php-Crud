<?php
//error_reporting(0);
include('connection.php');

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
    <title>PHP CRUD</title>
    <style>
        .container
        {
            padding:30px;
        }
        .b
        {
            float:right;
        }
        .text
        {
            float:left;
        }
        </style>
  </head>
  <body>
  <div class="container">
     <div class="text"> <h2>Employee Details</h2></div>
     <a href="add_employee.php"> <div class="btn btn-primary b">+Add Employee</div></a>
  <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
             <?php
                $res=mysqli_query($conn,"select * from employee");
                $row=mysqli_num_rows($res);
                if($row>0){
                while ($row=mysqli_fetch_array($res))
                 {

        ?>
            <tr>
                <td> <?php echo $row['id']; ?></td>
                
                <td><?php  echo $row['name'];?></td>
                <td><?php  echo $row['address'];?></td>
                 <td><?php  echo $row['salary'];?></td>
             
                        <td>
                               
              
                        <a href='index.php?id=<?php echo $row['id']?>' class="fa fa-eye"></a>
                                <a href='update_employee.php?id=<?php echo $row['id']?>' class="fa fa-pencil"></a>
                               <a href='delete.php?id=<?php echo $row['id']?>' class="fa fa-trash"></a>
                                
                            
                               </td>
            </tr>
           <?php 
            
            } } else {?>
            <tr>
            <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
            </tr>
            <?php } ?>
</table>
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