<?php
include("connection.php");
error_reporting(0);
$web = $_GET['rn'];
$query = "DELETE FROM COMPANIES WHERE WEBSITE = '$web' ";
$data = mysqli_query($conn, $query);
if ($data) {
    echo "<script type='text/javascript'>alert('Record Deleted');
        window.location.href = 'update.php';
        </script>";
    exit;
} else {
    echo "Failed to delete record";
}
