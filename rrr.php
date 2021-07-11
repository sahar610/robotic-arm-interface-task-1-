<?php
$conn = mysqli_connect('localhost','root','','training');


$my_query = "CREATE TABLE robotcontrol(
    Fo varchar(255),
    Ba varchar(255),
    Le varchar(255),
    Ri varchar(255),
    St varchar(255) 
);";
$result = $conn->query($my_query);
echo "$result";


if(isset($_REQUEST['Fo'])){
    $my_query = "INSERT INTO robotcontrol (Fo) VALUES ('F');";
    $result = $conn->query($my_query);
    echo "F";
}
   
if(isset($_POST['Ba'])){
    $my_query = "INSERT INTO robotcontrol (Ba) VALUES ('B')";
    $result = mysqli_query($conn, $my_query);
        echo "B";
    }

if(isset($_POST['Ri'])){
    $my_query = "INSERT INTO robotcontrol (Ri) VALUES ('R')";
    $result = mysqli_query($conn, $my_query);
        echo "R";
    }
    
if(isset($_POST['Le'])){
    $my_query = "INSERT INTO robotcontrol (Le) VALUES ('L')";
    $result = mysqli_query($conn, $my_query);
        echo "L";
    }

if(isset($_POST['St'])){
        $my_query = "INSERT INTO robotcontrol (St) VALUES ('S')";
        $result = mysqli_query($conn, $my_query);
             echo "S";
}

mysqli_close($conn);

?>