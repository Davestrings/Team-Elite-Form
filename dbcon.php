<?php 
/*$con = mysqli_connect('localhost','root','','siwes_mgt');
if (!$con)
{
	echo "failed to connect to MYSQL ";
	
}
echo 'success';

//mysqli_select_db($con,'siwes_mgt')or die(mysqli_error());
*/
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'slack')or die(mysqli_error());

?>