<?php
     include 'Connection.php';
      session_start();?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Attendance Management System</title>
<!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-leadership-event.css" rel="stylesheet">
    </head>
    
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
                            <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-btn btn d-none d-lg-block" href="register.php">SIGNUP</a>
                        </li>
                    </ul>
                <div>         
            </div>
        </nav>
<main>
    <section class="contact " >
        <div class="container-fluid py-5" >
        <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;" style="background-color:#b3b3b3;">LOGIN NOW</h1>
        </div>
        <div class="row justify-content-center" >
        <div class="col-lg-6">
        <div class="contact-form bg-secondary rounded p-5" >
          <form id="submitForm"  method="POST" >
                <div class="control-group ">
            <input type="email" class="form-control" id="username" required="" name="email"style="text-color:#000;" placeholder="E-mail">
                </div>
                <div class="control-group"><br>
            <input type="password" class="form-control" required="" id="password" name="password"style="text-color:#000;" placeholder="Password">
                </div>
                <div class="text-center"><br>
            <button class="custom-btn btn mt-3 " name="submit" type="submit" value="submit">Log In</button>
                </div>
          </form>
        </div>
        </div>
        <div class="text-center"><br>
            <a class="custom-btn btn mt-3" href="register.php" >REGISTER NOW</a>
        </div>
        </div>
        </div>
        </div>
    </section>
 </main>
</body>

</html>

<?php
   if(isset($_POST['submit']))
 {
   $user = $_POST['email'];
   $pass = $_POST['password'];
    
   $query=mysqli_query($conn,"SELECT * FROM users WHERE email = '$user' AND password = '$pass' AND usertype = 'admin' ");   
                                                          
   $num_rows=mysqli_num_rows($query);
   $row=mysqli_fetch_array($query);
   $_SESSION["user_id"]=$row['id'];
     if ($num_rows>0)
    {
        ?>
        <script>
          alert('Successfully Log In');
          document.location='ADMIN/index.php?id=<?php echo $row['id']; ?>'
        </script>
        <?php
    }
 
    $query=mysqli_query($conn,"SELECT * FROM users WHERE email = '$user' AND password = '$pass' AND usertype = 'student'  ");
    $num_rows=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
      if ($num_rows>0)
     {
         ?>
         <script>
           alert('Successfully Log In');
           document.location='STUDENT/index.php?id=<?php echo $row['id']; ?>'
         </script>
         <?php
     }
 
    $query=mysqli_query($conn,"SELECT * FROM user WHERE email = '$user' AND password = '$pass'  AND usertype = 'trainer' AND status='Confirmed'");
    $num_rows=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
      if ($num_rows>0)
    {
      ?>
      <script>
        alert('Successfully Log In');
        document.location='TRAINER/index.php?id=<?php echo $row['id']; ?>'
         </script>
      <?php
    }
    else{
        ?>
    
        <script>
         alert('Invalid Email or Password');
         document.location='index.php'
      </script>
      <?php
    
    }
    }
    ?>
<!-- JAVASCRIPT FILES -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/click-scroll.js"></script>
   <script src="js/custom.js"></script>

   