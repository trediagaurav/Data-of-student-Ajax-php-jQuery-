<?php 
include('dbConnection.php');

//Retrieve Student Information
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if($result -> num_rows > 0){
    $data = array();
    while($row = $result -> fetch_assoc()){
        $data[] = $row;
    }
}

// Returning JSOn Format Data as Response to AJAX Call
echo json_encode($data)
?>