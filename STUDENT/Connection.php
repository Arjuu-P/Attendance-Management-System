<?php
$conn=mysqli_connect('localhost','root','');
$db="attendance_management_system";
if(!$conn)
{
	die("Could not connect:".mysqli_error($conn) );
}
else
{
	//echo 'connected successfully';
}
$db=mysqli_select_db($conn,"attendance_management_system");
if(!$db)
{
	die("Could not select:".mysqli_error($conn));
}
?>