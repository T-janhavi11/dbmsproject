<?php
$con= mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con,'userdatadbms');

$firstnamecl = $_POST['firstnamecl'];
$middlenamecl = $POST['middlenamecl'];
$lastname = $POST['lastname'];
$emailcl = $POST['emailcl'];
$mobile = $POST['mobile'];
$gender = $POST['gender'];
$birthdaycl = $POST['birthdaycl'];
$password = $POST['password'];

?>
