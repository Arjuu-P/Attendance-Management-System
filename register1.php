<?php
     include 'Connection.php';
      session_start();
?>
<!DOCTYPE html>
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
<nav class="navbar navbar-expand-lg " >
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
                            <a class="nav-link " href="index.html">Home</a>
                        </li>

                       

                       
                        <li class="nav-item">
                            <a class="nav-link custom-btn btn d-none d-lg-block" href="index.php">LOGIN </a>
                        </li>
                    </ul>
                <div>
                        
            </div>
        </nav>

        <section class="contact ">
        
       
            <div class="text-center mb-5">
                <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;" style="background-color:#b3b3b3;">REGISTER AS STUDENT</h1>
            </div>
            <div class="row justify-content-center" >
                <div class="col-lg-6">
                    <div class="contact-form bg-secondary rounded p-5" >
                        <form id="submitForm" action="" method="POST" >
						<div class="control-group ">
                                    <input type="name" class="form-control" id="name" required="" name="name"style="text-color:#000;" placeholder="Name">
                                
                            </div> 
                            <div class="control-group "><br>
                                    <input type="email" class="form-control" id="username" required="" name="email"style="text-color:#000;" placeholder="E-mail">
                                
                            </div>
                           
                            <div class="control-group"><br>
                                    <input type="password" class="form-control" required="" id="password" name="password"style="text-color:#000;" placeholder="Password">
                               </div>
							   <div class="control-group"><br>
                                    <input type="text" class="form-control" required="" id="contact" name="contact"style="text-color:#000;" placeholder="Contact">
                               </div>
							   <div class="control-group"><br>
                                    <input type="text" class="form-control" required="" id="Address" name=" Address"style="text-color:#000;" placeholder="Address">
                               </div>
                            <div class="text-center"><br>
                            <button class="btn btn-primary btn-block " name="submit" type="submit" value="submit">REGISTER</button>
                                   </div>
                        </form>
                    </div>
                </div>
				<div class="text-center"><br><a href="register.php" style="font-size:35px; color:black;">
                            <b>REGISTER AS STUDENT<b></a>
            </div>
        </div>
    </div>
            </section>


</body>

</html>
<?php
include 'Connection.php';
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$address = $_POST['address'];

$usertype = "Trainer";
$status = "Waiting";
$today = Date("Y-M-D");


$query = "INSERT INTO users
(name, email ,contact,password,usertype,status,created_date)
VALUES ('".$name."','".$email."','".$contact."','".$password."','".$usertype."','".$status."','".$today."')";
mysqli_query($conn,$query)or die ('Error in updating Database');


?>
                <script type="text/javascript">
            alert("Successfully Registered.");
            window.location = "login.php";
        </script>
                <?php
}

      ?>




    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>