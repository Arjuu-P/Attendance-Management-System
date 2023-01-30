<?php
include 'Connection.php';
 session_start(); 
 $id=$_SESSION['user_id'];
 $sql = "SELECT * FROM users where  usertype='trainer'";
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
    <a class="nav-link " href="index.php">TRAINERS</a>
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
    <div class="container" >
    <div class="listWrap">
    <h1 style=" text-align:center;"> TRAINER'S APPLIED</h1>
    <ul class="list"  style="margin-left:15%; width:80%">
<?php
    if ($result->num_rows > 0) { ?>	
    <li>
    <span>NAME</span>
    <span>EMAIL</span>
    <span>CONTACT</span>
    <span>SUBJECT</span>
    <span>EXPERIENCE</span>
    <span>STATUS</span>
    <span>EDIT</span>
    </li>
<?php
    while($row = $result->fetch_assoc()) {?>         
    <li>
    <span><?php echo $row["name"]; ?></span>
    <span><?php echo $row["email"]; ?> </span>
    <span><?php echo $row["contact"]; ?></span>
    <span><?php echo $row["subject"]; ?></span>
    <span><?php echo $row["exp"]; ?></span>
    <span><?php echo $row["status"]; ?></span>
    <span><a href="trainersts.php"><i class="gg-pen"></i></a></span>
    
    </li>
<?php
  }
?>               
    </ul>
<?php
 }
    else {
    echo "0 results";
     }
    $conn->close();
?>
   </div>
   </div>
</main>
</body>
</html>

 <!-- JAVASCRIPT FILES -->
 <script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/jquery.sticky.js"></script>
 <script src="../js/click-scroll.js"></script>
 <script src="../js/custom.js"></script>
