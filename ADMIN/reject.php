
     <?php
include ('../Connection.php');

$id = $_GET['id'];
$status="Rejected";
$query = "UPDATE users SET status='$status' where id='$id'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

                    ?>
                     <script type="text/javascript">
            alert("Rejected Successfully.");
            window.location = "teacher.php";
        </script>