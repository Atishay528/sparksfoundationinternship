<?php
session_start();
$con=mysqli_connect('localhost','root','','spark_foundation');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from spark where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser
    </title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="html.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
    body,tr,td,table,th,thead{
      font-family:'Sofia';
    	font-size: 30px;
    }
    </style>
    </head>
    <body>
    <div class="view"><center>
        <h1>Choose name for credit transfer</h1></center>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th>Name</th>
           <?php
     while($row = $result->fetch_assoc()) { ?>


   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>

   </tr>
<?php }
  ?>
       <tr>
         <br>

           <td><input type="submit" value="credit"></td>
           </tr>
        </table>
        </form>
        </div>
    </body>
</html>
