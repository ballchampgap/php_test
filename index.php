<?php
include('connect.php');
$sql = "SELECT * FROM pest_epic";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <div class="container my-5">
        <div class="card">
            <div class="card-body">
                <h3>---</h3>
                <form action = "frminsert.php" method="POST">
                    <div class="form">
                        <div class="form-group">
                        <label for="pest_eco">เลือกเรื่องที่จะแจ้ง ?</label>
                            <select name="pest_epic_id" id="pest_epic" class="form-control" required>
                                <option value="">--choose1--</option>
                                <?php while($result = mysqli_fetch_assoc($query)): ?>
                                <option value="<?=$result['id']?>"><?=$result['name_th']?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="planteco">เลือกพืชเศรษฐกิจ ?</label>
                            <select name="planteco_id" id="planteco" class="form-control" required>
                                <option value="">--choose2--</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="data_pest_epic">เป็นอะไร ?</label>
                            <select name="data_pest_epic_id" id="data_pest_epic" class="form-control" required>
                                <option value="">--choose3--</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <input type="submit" value="Save">
                        <input type="reset" value="Clear">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/script.js"></script>
</body>

</html>
<?php
mysqli_close($conn);