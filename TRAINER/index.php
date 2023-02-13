<?php
include 'Connection.php';
 session_start(); 
 $id=$_SESSION['user_id'];
 $sql = "SELECT * FROM users where  usertype='trainer'AND status='Confirmed'";
 $result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
<title>Attendance Management System </title>
<link href='https://css.gg/pen.css' rel='stylesheet'>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
 <link href="../css/bootstrap.min.css" rel="stylesheet">
 <link href="../css/bootstrap-icons.css" rel="stylesheet">
 <link href="../css/templatemo-leadership-event.css" rel="stylesheet">
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a href="index.php" class="navbar-brand mx-auto mx-lg-0">
    <i class="bi-bullseye brand-logo"></i>
    <span class="brand-text">Attendance <br>Management System</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
    <li class="nav-item">
    <a class="nav-link " href="index.php">PROFILE</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="index.php">STUDENTS</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="index.php">SESSIONS</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="index.php">ATTENDANCE</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " href="../logout.php">LOGOUT</a>
    </li>
    </ul>
    <div>
    </div>
  </nav>
<main>
<section class="contact ">
    <div class="text-center mb-5">
    <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;" style="background-color:#b3b3b3;">REGISTER AS STUDENT</h1>
    </div>
    <div class="row justify-content-center" >
    <div class="col-lg-6">
    <div class="contact-form bg-secondary rounded p-5" >
      <form id="submitForm" action="" method="POST" >
		<div class="control-group ">
        <label name="name"><?php echo $row["name"]; ?>   </div> 
        <div class="control-group "><br>
        <label name="email"><?php echo $row["email"]; ?>          </div>
        <div class="control-group"><br>
        <label name="contact"><?php echo $row["contact"]; ?>          </div>
		<div class="control-group"><br>
    <input type="text" class="form-control" required="" id="address" name=" address"style="text-color:#000;" placeholder="Address">
        </div>
		<div class="control-group"><br>
    <input type="text" class="form-control" required="" id="subject" name=" subject"style="text-color:#000;" placeholder="Subject">
        </div>
        <div class="control-group"><br>
    <input type="text" class="form-control" required="" id="exp" name=" exp"style="text-color:#000;" placeholder="Experience">
        </div>
        <div class="text-center"><br>
            <button class="btn btn-primary btn-block " name="submit" type="submit" value="submit">UPDATE</button>
        </div>
      </form>
    </div>
    </div>
	
    </div>
    </div>
</section>

</main>
</body>
</html>

 <!-- JAVASCRIPT FILES -->
 <script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/jquery.sticky.js"></script>
 <script src="../js/click-scroll.js"></script>
 <script src="../js/custom.js"></script>
