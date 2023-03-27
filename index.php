<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
<body>
  <form method="post">
<input type="text" placeholder="Type Keyword" name="search" autocomplete="off" required>
<input type="submit" name="submit" value="search">
  </form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
@$search=$_POST['search'];
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT * FROM products where name  like '%$search%' ";
$result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_array($result);
// echo $row['name'];
echo "<br><h2>Search For keyword $search is :</h2>";
while($row=mysqli_fetch_assoc($result)){

?>
<td><?php echo $row['name']?></td><br>
<?php }}?>
