<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<center>
<h1 class ="mt-5">Phone Register Form</h1>
<a  class="btn btn-outline-success" role="button" href ="index.php">Home</a>
<a  class="btn btn-outline-success" role="button" href ="display.php">Display</a>




<table class="table table-success mt-3">
    <tr>
            <td>No</td>
            <td>Name</td>
            <td>Brand</td>
            <td>Price</td>
            <td>Phone Number</td>
            <td>Image</td>
            <td>Delete</td>
            <td>Edit</td>

    </tr>


<?php
error_reporting(1);
include('connection.php');
$data ="SELECT * FROM  phonelist ORDER BY id DESC ";//AESC -ascending 
$val =$con->query($data);
if ($val->num_rows > 0 ){
while(list($id,$phonename,$brand,$price,$phone,$img) = mysqli_fetch_array($val)){  //destructure
  echo "<tr>";
  echo "<td>".$id."</td>";
  echo "<td>".$phonename."</td>";
  echo "<td>".$brand."</td>";
  echo "<td>".$price."</td>";  
  echo "<td>".$phone."</td>";
 
  echo "<td> <img src ='./image/$phonename/$img' height ='100' width ='100' /></td>";
  echo "<td><a href ='delete.php?id=$id&pn=$phonename&img=$img'
  role ='button' class ='btn btn-danger'>
  Delete</a></td>";
  echo "<td><a href ='edit.php?id=$id'
  role ='button' class ='btn btn-primary'>
  Edit</a></td>";


  echo "</tr>";
ပအ


}}else{
  echo "<tr><td colspan='8' class ='text-center'>
  No data available </td></tr>";
}



?>

</table>
</center>
</body>