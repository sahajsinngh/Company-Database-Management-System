<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Database</title>
</head>

<body>
    <?php echo "<h2>Welcome " . $_SESSION['username'] . "</h2>"; ?>
    <a href="logout.php">Logout</a>
</body>

</html>