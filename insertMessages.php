<?php 
include "config.php";
$function = $_POST['func'];
if ($function == "insertMsg"){
$query = "INSERT INTO `messages`(`SenderName`, `PhoneNumber`, `Email`, `Subject`, `Message`, `Address`) VALUES ('".$_POST['nme']."','".$_POST['num']."','".$_POST['mail']."','".$_POST['sub']."','".$_POST['msg']."', '".$_POST['test']."');";
//if(mysqli_query($con,$query)){
    //echo "<script type='text/javascript'>alert('OK');</script>";
//}
//else{
    //echo "<script type='text/javascript'>alert('error');</script>";
//}
mysqli_query($con,$query);
}

?>

