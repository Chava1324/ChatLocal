<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "iis", $incoming_id, $outgoing_id, $message);
            mysqli_stmt_execute($stmt);

            if(mysqli_stmt_affected_rows($stmt) > 0) {
                echo "Message sent successfully.";
            } else {
                echo "Failed to send the message. Please try again.";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Message is empty.";
        }
    } else {
        header("location: ../login.php");
    }
?> 
