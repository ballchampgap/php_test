<?php
include('connect.php');
$sql = "SELECT * FROM planteco WHERE pest_epic_id={$_GET['pest_epic_id']}";
$query = mysqli_query($conn, $sql);
$json = array();
while($result = mysqli_fetch_assoc($query)) {    
array_push($json, $result);
}
echo json_encode($json);
?>
