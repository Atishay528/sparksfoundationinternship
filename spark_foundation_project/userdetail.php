<?php
session_start();
$con=mysqli_connect('localhost','root','','spark_foundation');
$name=$_POST['name'];
$q="select * from spark where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="html.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
table,thead,th,tbody,td,tr{
  border:1px solid black;
  border-collapse: collapse;

}
th{
  background-color:mediumseagreen;
}
tr:nth-child(odd){
  background-color:lightgray;
}
tr:hover{
  background-color:orange;
}
table,thead,th,tbody,td,tr{
  padding:20px;
  text-align: center;
  font-size: 30px;
}


body{

margin: 0;
font-family:'Sofia';
font-size: 50px;
}
</style>

</head>
    <body><center>
    <div class="view">
        <h2>User Information</h2>
       <table class="flat-table flat-table-1">

           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


           </tr>


        </table>

        </div>
        <br>
        <div class="css-button" >

                 <div class="css-button-inner">
                 <a href="viewusers.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>


                 <div class="css-button-inner">
                 <a href="selectuser.php.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Back</p>
               </div></a>
               </div>




    </body>
</html>
