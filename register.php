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
        <a class="nav-link " href="index.php">Home</a>
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
    <div class="col-lg-7">
    <div class="contact-form bg-secondary rounded p-2" >
    <form id="submitForm" action="" method="POST">
                            <div class="control-group">
                            <lSabel for="username">Name</lSabel>
                                    <input type="text" class="form-control " pattern="[A-Za-z ]*" id="username"
                                     required="" name="name" value="">
                                
                            </div>
                            
                            <div class="control-group">
                            <lSabel for="username">Email</lSabel>
                                    <input type="email" class="form-control text-lowercase" id="username" required="" name="email" value="">
                            </div>
                            <div class="control-group">
                            <div class="form-group required">
                                    <lSabel for="username">Please choose Your Course</lSabel>
                                    <select  class="form-control " id="username" required="" name="course" >
                                        <option>Select</option>
                                        <option>BCA</option>
                                        <option>BSc Computer Science</option>
                                        <option>MCA</option>
                                        <option>MSc Computer Science</option>
</select>

                                </div> 
                            <div class="form-group required">
                                    <lSabel for="username">Gender</lSabel>
                                    <select  class="form-control text-lowercase" id="username" required="" name="gender" >
                                        <option>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
</select>

                                </div> 
                                <div class="form-group required">
                                    <lSabel for="username">Contact</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username"
                                     pattern="[0-9]{10}" maxlength=10 required="" name="contact" value="">
                                </div>  
                            <div class="control-group">
                            <lSabel class="d-flex flex-row align-items-center" for="password">Password </lSabel>
                                    <input type="password" class="form-control" required="" id="password" name="password" value="" required>
                               
                            </div>
                            <div class="text-center"><br>
                            <button class="btn btn-primary btn-block py-3 px-5" name="submit" type="submit">REGISTER</button>
                            </div>
                            
                        </form>
    </div>
    </div>
	<div class="text-center"><br>
        <a href="register1.php" style="font-size:35px; color:black;border: 3px solid rebeccapurple;padding: .3em;">
        <b>REGISTER AS TRAINER<b></a>
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
    $course = $_POST['course'];
    
    $gender = $_POST['gender'];
    $usertype = "student";
    $status = "";
    
    $query = "INSERT INTO users
    (name,gender,course, email ,contact,password,usertype,status)
    VALUES ('".$name."','".$gender."','".$course."','".$email."','".$contact."','".$password."','".$usertype."','".$status."')";
    mysqli_query($conn,$query)or die ('Error in updating Database');
?>
    <script type="text/javascript">
     alert("Successfully Registered.");
     window.location = "index.php";
    </script>
<?php
}
?>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>
<script src="js/main.js"></script>

 
 
   