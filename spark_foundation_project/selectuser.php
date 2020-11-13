<?php
$con=mysqli_connect('localhost','root','','spark_foundation');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from spark";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
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
font-size: 50px;}

.cl{
	font-family:'Sofia';
	font-size: 20px;
}
			 </style>
</head>
<body>


<form  action="userdetail.php" method="post">
	<center>

     Select User from list
    <table class="flat-table flat-table-1">


    <?php
session_start();
$con=mysqli_connect('localhost','root','','spark_foundation');

$q="select * from spark ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>




	<thead>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>

	</thead>
	<tbody>
		<tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


		</tr>
		<tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>
        <tr>
        <?php

     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>


        </tr>

	</tbody>
</table>
</center>


    <div class="view">

<table  border=0 cellspacing=50px style="position: relative;left: 40%;">
  <tr>
      <td> Select User</td>

<td>

<?php
$con=mysqli_connect('localhost','root','','spark_foundation');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from spark";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()" class='cl'>
      <option>--Select--</option>
   <?php
     while($row = $result->fetch_assoc()) { ?>

      <option  class='cl' value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>

        </select>
      </td>
    </tr>

        </table>

</div>
    </form>
</body>
</html>
