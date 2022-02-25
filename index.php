<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Insert Data</title>
    <!-- <script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script> -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <!--===============================================================================================-->
</head>
<?php
include('connect.php');
$sql = "SELECT * FROM pest_epic";
$query = mysqli_query($conn, $sql);
?>
<style>
.loading {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 9999;
    background: url("https://i.gifer.com/YCZH.gif") no-repeat rgb(249, 249, 249);
    background-position: center;
    background-size: 100%;
}
</style>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form class="login100-form validate-form">
                <div class="login100-form-avatar">
                    <img id="pictureUrl">
                </div>

                <span class="login100-form-title p-t-20 p-b-45">
                    <p id="displayName"></p>
                </span>

                <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                    <div class="form">
                        <form id="mainfrom" action="frminsert.php" method="POST">
                            <div class="form-group">
                                <label for="pest_eco" class="text-light">กรุณาเลือกโรคระบาด หรือ ศัตรูพืช</label>
                                <select name="pest_epic_id" id="pest_epic" class="form-control" required>
                                    <option value=""></option>
                                    <?php while($result = mysqli_fetch_assoc($query)): ?>
                                    <option value="<?=$result['id']?>"><?=$result['name_th']?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <div class="form-group">
                            <label for="planteco" class="text-light">กรุณาเลือกชนิดของพืชเศรษฐกิจ</label>
                            <select name="planteco_id" id="planteco" class="form-control" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <div class="form-group">
                            <label for="data_pest_epic" class="text-light">กรุณาเลือกชนิดของโรคระบาด หรือ ศัตรูพืชที่พบ</label>
                            <select name="data_pest_epic_id" id="data_pest_epic" class="form-control" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <div class="form-group">
                            <label for="descrip" rows="3" class="text-light">รายละเอียด (ไม่บังคับ)</label><br>
                            <textarea name="descrip" type="text" id="descrip" class="form-control"
                                required> </textarea><br>
                        </div>
                    </div>

                    <div class="container-login100-form-btn p-t-10">
                        <input type="hidden" name="lat">
                        <input type="hidden" name="lon">
                        <input type="hidden" name="pname">
                        <button id="btn" type="submit" class="login100-form-btn">Save</button>
                    </div>
            </form>
        </div>
        </form>
    </div>
</div>
</div>




<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
</div>
</div>
<!-- <script> </script> -->

<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
</body>

</html>
<?php
mysqli_close($conn);