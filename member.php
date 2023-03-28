<?php
include “config.php”;
if (isset($_REQUEST[“submit”])) {
$id = $_REQUEST[“id”];
$name = $_REQUEST[“name”];
$date = $_REQUEST[“date”];
$dob = $_REQUEST[“dob”];
$phone = $_REQUEST[“phone”];
$coach = $_REQUEST[“coach”];
$ins = “INSERT INTO member (id,name, date,dob,phone,coach) VALUES (‘$id’,’$name’,’$date’,’$dob’,’$phone’,’$coach’)”;
$query1 = mysqli_query($connection, $ins);
}
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<title>members – Gym Management System</title>
<link rel=”shortcut icon” type=”image/x-icon” href=”assets/img/favicon.ico”>

<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
</head>
<body>

<!– nav bar start –>
<nav class=”navbar navbar-expand-lg navbar-light bg-light”>
<a class=”navbar-brand” href=”Biling.php”><img src=”img/TT.png” alt=””></a>
<div class=”collapse navbar-collapse” id=”navbarNav”>
<ul class=”navbar-nav”>
<li class=”nav-item active”>
<a class=”nav-link” href=”#”>Gym Mananagement System</a>
</li>
<li class=”nav-item”>
<a class=”nav-link” href=”coach.php”>Coach</a>
</li>
<li class=”nav-item”>
<a class=”nav-link” href=”member.php”>Members</a>
</li>

<li class=”nav-item”>
<a class=”nav-link disabled” href=”receptionist.php”>receptionist</a>
</li>
<li class=”nav-item”>
<a class=”nav-link disabled” href=”biling.php”>billing</a>
</li>
</ul>
</div>
</nav>
<!– nav bar ends –>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”></script>
<script src=”https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js” integrity=”sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q” crossorigin=”anonymous”></script>
<script src=”https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js” integrity=”sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl” crossorigin=”anonymous”></script>
</body>
</html>