<?php
$link=mysqli_connect('localhost','root','');
$db="attendance_management_system";
if(!$link)
{
	die("Could not connect:".mysqli_error() );
}
else
{
	//echo 'connected successfully';
}
$db=mysqli_select_db($link,"attendance_management_system");
if(!$db)
{
	die("Could not select:".mysqli_error($link));
}
?>