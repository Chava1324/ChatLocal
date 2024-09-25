<?php
session_start();
include_once "config.php";

$outgoing_id = $_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

$sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (full_name LIKE '%{$searchTerm}%')";
$output = "";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $output .= '<div>' . $row['full_name'] . '</div>';
    }
}else{
    $output .= 'No user found related to your search term';
}
echo $output;
?>
