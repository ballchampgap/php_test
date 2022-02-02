<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
require 'connect.php';


$pname = $_POST['pname'];
$pest_epic = $_POST['pest_epic_id'];
$planteco = $_POST['planteco_id'];
$data_pest_epic = $_POST['data_pest_epic_id'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];

if ($pest_epic==1){
    $sql =  "INSERT INTO epidemic (yname,plant_type,data_epidemic,lat,lon)
    VALUE ('$pname', '$planteco', '$data_pest_epic','$lat','$lon')";
    $resultInsert = mysqli_query($conn, $sql);
}
else{
    $sql =  "INSERT INTO pest (yname,plant_type,data_pest,lat,lon)
    VALUE ('$pname', '$planteco', '$data_pest_epic', '$lat','$lon')";
    $resultInsert = mysqli_query($conn, $sql);
}
//บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   
if ($resultInsert) 
{echo "<script>
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
    header("refresh:2; url=index.php");
}

?>