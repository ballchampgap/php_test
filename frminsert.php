<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

require_once 'connect.php';

$pname = $_POST['pname'];
$pest_epic = $_POST['pest_epic_id'];
$planteco = $_POST['planteco_id'];
$data_pest_epic = $_POST['data_pest_epic_id'];
$latitude = $_POST['lat'];
$longitude = $_POST['lon'];
$descrip = $_POST['descrip'];
$result = getAddress($latitude, $longitude);
// query planteco name_th
$plant = mysqli_query($conn, "SELECT * FROM planteco WHERE id = '$planteco'");
while ($row = $plant->fetch_assoc()) {
    $planteco_name_th = $row['name_th'];
}
// query data_pest_epic name_th
$data_pest_epic_a = mysqli_query($conn, "SELECT * FROM data_pest_epic WHERE id = '$data_pest_epic'");
while ($row = $data_pest_epic_a->fetch_assoc()) {
    $data_pest_epic_name_th = $row['name_th'];
}
  

function getAddress($latitude, $longitude)
{
        //google map api url
        $url = "https://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=AIzaSyBvq4L0KKO9R7t16YPjQtHo806NaHfYpjc";

        // send http request
        $geocode = file_get_contents($url);
        $json = json_decode($geocode);
        $address = $json->results[0]->formatted_address;
        return $address;
}


if ($pest_epic == 1) {
    $sql = "INSERT INTO epidemics (yname,plant_type,data_epidemic,lat,lon,description,address)
    VALUE ('$pname', '$planteco_name_th', '$data_pest_epic_name_th','$latitude','$longitude','$descrip','$result')";
    $resultInsert = mysqli_query($conn, $sql);
} else {
    $sql = "INSERT INTO pests (yname,plant_type,data_pest,lat,lon,description,address)
    VALUE ('$pname', '$planteco_name_th', '$data_pest_epic_name_th', '$latitude','$longitude','$descrip','$result')";
    $resultInsert = mysqli_query($conn, $sql);
}
//แจ้งเตือน
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "82DUKC5VGzG7PQw9RAbrLUooaA6oNTNSVrJ4LVXiLie";
    if ($pest_epic == 1){
        $sMessage = "📌เเจ้งเตือนเรื่องโรคระบาด\n";
    }
    else{
        $sMessage = "📌เเจ้งเตือนเรื่องศัตรูพืช\n";
    }
    $sMessage .= "👨‍💼ชื่อ:  " . $pname . " \n";
  
     $sMessage .= "ชนิดของพืชเศรษฐกิจ:  " . $planteco_name_th . " \n";
    
     if ($pest_epic == 1){
        $sMessage .= "ชื่อโรคระบาด:  " . $data_pest_epic_name_th . " \n";
    }
    else{
        $sMessage .= "ชื่อศัตรูพืช:  " . $data_pest_epic_name_th . " \n";
    }
    $sMessage .= "ที่อยู่:  " . $result . " \n";
   
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result3 = curl_exec( $chOne ); 

	curl_close( $chOne );   

บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม
if ($resultInsert) {
    echo "<script>
                $(document).ready(function() {
                    Swal.fire({
                        title: 'success',
                        text: 'Data inserted successfully!',
                        icon: 'success',
                        timer: 5000,
                        showConfirmButton: false
                    });
                })
            </script>";
    header('refresh:2; url=index.php');
}

?>