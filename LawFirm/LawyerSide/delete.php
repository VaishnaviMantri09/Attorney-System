<?php

  $con =mysqli_connect('localhost' , 'root', '', 'cilent');
$id = $_GET['ID'];
$q = " DELETE FROM `appointments` WHERE id = $id ";
$result=mysqli_query($con,$q);
echo' <script type="text/javascript">alert ("Deletion Operation Sucessfully")</script>';
?>
