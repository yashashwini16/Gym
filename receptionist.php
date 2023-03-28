<?php
include “config.php”;
if (isset($_REQUEST[“submit”])) {
$id = $_REQUEST[“id”];
$name = $_REQUEST[“name”];
$date = $_REQUEST[“date”];
$address = $_REQUEST[“address”];
$phone = $_REQUEST[“phone”];
$ins = “INSERT INTO receptionist (id,name, date,address,phone) VALUES (‘$id’,’$name’,’$date’,’$address’,’$phone’)”;
$query1 = mysqli_query($connection, $ins);
}
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<title>receptionist – Gym Management System</title>
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
Create Gym Management Website using PHP, MySQL and Bootstrap 4
August 9, 2022 by Taha Azam 1 Comment

Gym Management Website using PHP, MySQL and Bootstrap

In this article, we are creating the Gym management system using PHP, MySQL, and Bootstrap 4 with backend and frontend modules with multiple pages.

A health fitness center (GYM) is a very important place for any living community. Usually, the societies have gyms and these fitness centers need management websites and software to store members’ and coaches’ records and for promotion purposes to upgrade the scale of business.

 

Modules in Gym Management Website?
There are two modules on the Gym Management Website.

1) Frontend Module
2) Backend Module

Do we have a Source code and ready-made Frontend to download?
Yes, you can download the source code and ready-made frontend as well from this article that is attached at the end of this tutorial.

Technologies used in Gym Management Website?
This website has two modules as mentioned above the frontend and the backend.
Frontend Module:
The frontend module is created with HTML, CSS, and Bootstrap
Backend Module:
The backend module is created with PHP and MySQL.

How to create a Gym Management website?
First Thing First! download Apache XAMPP is your local pc. This attached video will help you download and install Apache Xampp on your Local PC



1) Create a directory name “Gym” inside htdocs folder.

Gym Management Website using PHP, MySQL and Bootstrap

 

2) Open this folder in your VS CODE or SUBLIME.

3) Create some PHP files inside the “Gym Folder”.

Gym Management Website using PHP, MySQL and Bootstrap

4) Create a folder name “img” inside the Gym Management System. you can store images in this folder that will be used in the backend module.

Gym Management Website using PHP, MySQL and Bootstrap

Development in the Gym Management System:
1) Billing.php: The billing page can store the member’s fees they have paid.

<?php
include “config.php”;
if (isset($_REQUEST[“submit”])) {
$id = $_REQUEST[“id”];
$name = $_REQUEST[“name”];
$date = $_REQUEST[“date”];
$amount = $_REQUEST[“amount”];
$ins = “INSERT INTO billing (id,name, date,amount) VALUES (‘$id’,’$name’,’$date’,’$amount’)”;
$query1 = mysqli_query($connection, $ins);
}
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<title>Biling – Gym Management System</title>
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
<!– form start –>
<form>
<div class=”form-row”>
<div class=”form-group col-md-6″>
<label for=”inputEmail4″>Member ID</label>
<input type=”text” name=”id” class=”form-control” id=”inputEmail4″ placeholder=”ID”>
</div>
<div class=”form-group col-md-6″>
<label for=”inputPassword4″>Member Name</label>
<input type=”text” name=”name” class=”form-control” id=”inputPassword4″ placeholder=”Name”>
</div>
</div>
<div class=”form-group”>
<label for=”inputAddress”>Billing Date</label>
<input type=”text” name=”date” class=”form-control” id=”inputAddress” placeholder=””>
</div>
<div class=”form-group”>
<label for=”inputAddress2″>Amount</label>
<input type=”text” name=”amount”class=”form-control” id=”inputAddress2″ placeholder=”Amount”>
</div>
<button type=”submit” name= “submit” class=”btn btn-primary”>Save</button>
</form>
<!– form end –>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”></script>
<script src=”https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js” integrity=”sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q” crossorigin=”anonymous”></script>
<script src=”https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js” integrity=”sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl” crossorigin=”anonymous”></script>

</body>
</html>

2. Coach.php: The Coach page stores the coach details that are working inside the gym premises.

<?php
include “config.php”;

if (isset($_REQUEST[“submit”])) {

$id = $_REQUEST[“id”];
$name = $_REQUEST[“name”];
$date = $_REQUEST[“date”];
$experience = $_REQUEST[“experience”];
$ins = “INSERT INTO coach (id,name, date,experience) VALUES (‘$id’,’$name’,’$date’,’$experience’)”;
$query1 = mysqli_query($connection, $ins);
}
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<title>Document</title>
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
<a class=”nav-link disabled” href=”membership.php”>Membership</a>
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
<!– form start –>
<form>
<div class=”form-row”>
<div class=”form-group col-md-6″>
<label for=”inputEmail4″> ID</label>
<input type=”text” name=”id” class=”form-control” id=”inputEmail4″ placeholder=”ID”>
</div>
<div class=”form-group col-md-6″>
<label for=”inputPassword4″> Name</label>
<input type=”text” name=”name” class=”form-control” id=”inputPassword4″ placeholder=”Name”>
</div>
</div>
<div class=”form-group”>
<label for=”inputAddress”> Date</label>
<input type=”text” name=”date” class=”form-control” id=”inputAddress” placeholder=”date”>
</div>
<div class=”form-group”>
<label for=”inputAddress2″>Experience</label>
<input type=”text” name=”experience”class=”form-control” id=”inputAddress2″ placeholder=”experience”>
</div>
<button type=”submit” name= “submit” class=”btn btn-primary”>Save</button>
</form>
<!– form end –>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”></script>
<script src=”https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js” integrity=”sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q” crossorigin=”anonymous”></script>
<script src=”https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js” integrity=”sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl” crossorigin=”anonymous”></script>

</body>
</html>

3. member.php: The member page stores the member’s data that have enrolled in the respective gym.

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

4. receptionist.php: This file stores the receptionist data that are responsible to enrolled all new members and coaches enrollments.

<?php
include “config.php”;
if (isset($_REQUEST[“submit”])) {
$id = $_REQUEST[“id”];
$name = $_REQUEST[“name”];
$date = $_REQUEST[“date”];
$address = $_REQUEST[“address”];
$phone = $_REQUEST[“phone”];
$ins = “INSERT INTO receptionist (id,name, date,address,phone) VALUES (‘$id’,’$name’,’$date’,’$address’,’$phone’)”;
$query1 = mysqli_query($connection, $ins);
}
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<title>receptionist – Gym Management System</title>
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