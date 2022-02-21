<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
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
<body>
<div class="container">
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img id="pictureUrl" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px">
            </div>
            <form id="mainfrom" action="frminsert.php" method="POST">
            <div class="mb-3">
            <label for="pest_eco">กรุณาเลือกโรคระบาด หรือ ศัตรูพืช</label>
            <select name="pest_epic_id" id="pest_epic" class="form-control" required>
            <option value=""></option>
            <?php while($result = mysqli_fetch_assoc($query)): ?>
            <option value="<?=$result['id']?>"><?=$result['name_th']?></option>
            <?php endwhile; ?>
        </select>
            </div>
            <div class="mb-3">
            <label for="planteco">กรุณาเลือกชนิดของพืชเศรษฐกิจ</label>
             <select name="planteco_id" id="planteco" class="form-control" required>
             <option value=""></option>
             </select></div>
             <div class="mb-3">
             <label for="data_pest_epic">กรุณาเลือกชนิดของโรคระบาด หรือ ศัตรูพืชที่พบ</label>
             <select name="data_pest_epic_id" id="data_pest_epic" class="form-control" required>
            <option value=""></option>
            </select>
            </div>
            <div class="mb-3">
            <label for="descrip" rows="3">รายละเอียด (ไม่บังคับ)</label><br>
            <textarea name="descrip" type="text" id="descrip" class="form-control" required> </textarea><br>
            </div>
            <div class="text-center"><button id="btn" type="submit" class="btn btn-color px-5 mb-5 w-100">Save</button></div>
            <input type="hidden" name="lat">
              <input type="hidden" name="lon">
             <input type="hidden" name="pname">
          </form>
        </div>

      </div>
    </div>
  </div>
  </body>

</html>
<?php
mysqli_close($conn);
