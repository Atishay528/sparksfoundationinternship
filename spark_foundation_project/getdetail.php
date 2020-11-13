<?php
session_start();
$con=mysqli_connect('localhost','root','','spark_foundation');
$q="select * from spark ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<html>
<head>
<title>
list
</title>
<meta charset='utf-8' >
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body>
  <center>
User Information

<table>
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
<button class="button button2"> <a href='index.php'>Home</button>
</center>
</body>
</html>
