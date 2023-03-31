<?php
include 'Connection.php';
 session_start(); 
 $id=$_SESSION['user_id'];
 $sql = "SELECT * FROM sessions ";
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
    <a class="nav-link " href="index.php">TRAINERS</a>
    <a class="nav-link " href="students.php">STUDENTS</a>
    <a class="nav-link " href="sessions.php">SESSIONS</a>
    <a class="nav-link " href="attendance.php">ATTENDANCE</a>
    <a class="nav-link " href="../logout.php">LOGOUT</a>
    </ul>
    <div>
    </div>
  </nav>
<main>
<style>
table, th,tr, td {
  border: 2px solid black;}
th {
  background-color: #96D4D4;
}
</style>
<h1 style=" text-align:center;"> VIEW SESSION</h1>

        <table style=" text-align:center;margin-left:5%;margin-right:5%; width:90%;">
             
       
<?php
    if ($result->num_rows > 0) { ?>	
    <th>TRAINER NAME</th>
    <th>COURSE</th>
    <TH>DATE</TH>
    <th>TIME</th>
    <th>LINK</th>

<?php
    while($row = $result->fetch_assoc()) {?>         
    <tr>
    <td><?php echo $row["trainer"]; ?></td>
    <td><?php echo $row["course"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["time"]; ?></td>
    <td><?php echo $row["link"]; ?></td>
    </tr>

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
