<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from `data_mhs`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
