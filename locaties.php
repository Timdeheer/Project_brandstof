<?php
$con=mysqli_connect("localhost","root","","brandstof");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM locatie") or die (mysqli_error($con));

while($row = mysqli_fetch_array($result))
{

	echo $row['naamlocatie'];
}



  ?>