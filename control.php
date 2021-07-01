<?php

$conn = mysqli_connect('localhost','root','','trainingsahar1');


 if (!$conn) {
 	echo "database cannection fild .... ";
 }

$Engon_1= $Engon_2= $Engon_3= $Engon_4= $Engon_5= $Engon_6='';

 if(isset($_REQUEST['send'])){
$Engon_1 = $_REQUEST['Engon_1'];
$Engon_2 = $_REQUEST['Engon_2'];
$Engon_3 = $_REQUEST['Engon_3'];
$Engon_4 = $_REQUEST['Engon_4'];
$Engon_5 = $_REQUEST['Engon_5'];
$Engon_6 = $_REQUEST['Engon_6'];


$sql = "INSERT INTO save (Engon_1,Engon_2,Engon_3,Engon_4,Engon_5,Engon_6) VALUES 
('$Engon_1','$Engon_2','$Engon_3 ','$Engon_4','$Engon_5','$Engon_6')";

if ( mysqli_query($conn,$sql)){
	
		header('Location:http://localhost/trainingsahar1/savad.php');
	}

	else{
		echo "error";
	}
}




?>