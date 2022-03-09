<?php
include('connect.php');
$sql = "SELECT * FROM dataepidemics WHERE plantecoepidemic_id={$_GET['plantecoepidemic_id']}";
$query = mysqli_query($conn, $sql);
$json = array();
while($result = mysqli_fetch_assoc($query)) {    
array_push($json, $result);
}
echo json_encode($json);
?>
