<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = "SELECT * FROM users WHERE user_id != {$outgoing_id} ORDER BY user_id DESC";
$query = mysqli_query($conn, $sql);
$output = "";
if (mysqli_num_rows($query) == 0) {
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        
        $output .= '<div>' . $row['full_name'] . '</div>';
    }
}
echo $output;
?>
