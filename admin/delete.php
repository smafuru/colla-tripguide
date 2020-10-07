<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
//require 'check_login.php';
    if
$id = $_GET['id'];

$result = mysqli_query("DELETE FROM tblusers WHERE id = $id");
 
//redirecting to the display page (index.php in our case)
header("Location:manage-users.php");
}
?>
<script type = "text/javascript">
         <!--
            function getConfirmation() {
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                  document.write ("User wants to continue!");
                  return true;
               } else {
                  document.write ("User does not want to continue!");
                  return false;
               }
            }
         //-->
         