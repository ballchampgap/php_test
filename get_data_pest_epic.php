    <?php
include('connect.php');
$sql = "SELECT * FROM data_pest_epic WHERE planteco_id={$_GET['planteco_id']}";
$query = mysqli_query($conn, $sql);
$json = array();
while($result = mysqli_fetch_assoc($query)) {    
array_push($json, $result);
}
echo json_encode($json);
?>