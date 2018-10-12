<?php 
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INDEx</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<div class ="row">
<div class ="col-6">
<h1>LOG IN</h1>
<form action="login.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password">
  </div>

  <button type="submit" class="btn btn-success">LOG IN</button>
</form>
</div>

<div class ="col-6">
<h1>REGRISTER</h1>
<form action="regrister.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password">
  </div>

  <button type="submit" class="btn btn-info">REGRISTER</button>
</form>
</div>
</div>

<div class="row">
<div class ="col-6">
<h1>แสดงข้อมูล</h1>
<table>
<th>Email</th>
<th>password</th>
<th></th>
<th></th>
<th></th>
<?php
$sql = "SELECT * FROM users";
$query = mysqli_query($con,$sql);
while($result = mysqli_fetch_array($query)) {
?>
<tbody>
<tr>
<td><?php echo $result['email'] ?></td>
<td><?php echo $result['password'] ?></td>
<td><input type="hidden" name="id" value="<?php echo $result['id'] ?>"></td>
<td><a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-warning">edit</a></td>
<td><a href="delete.php?id=<?php echo $result['id'] ?>" class="btn btn-danger">delete</a></td>
</tr>
</tbody>
<?php   
}
?>
</table>
</div>

<div class ="col-6">
<h1>อัพโหลดรูป</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="xx">
<button type="submit" class="btn btn-dark">OK</button>
</form>
</div>

</div>

<?php
$img_sql = "SELECT * FROM images";
$img_query = mysqli_query($con,$img_sql);
while ($data = mysqli_fetch_array($img_query)) {
?>
<img src="img/<?php echo $data['name']?>" width="150" height="150">


<?php
}
?>
</body>
</html>