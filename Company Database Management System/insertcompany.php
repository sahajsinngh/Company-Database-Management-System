<?php
include('connection.php');
error_reporting(0);
?>

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Data</title>
</head>

<body>
    <section>
        <a class='float' href="update.php">Update Details</a>
        <a class='float' href="company.php">Display Details</a>
    </section>
    <section>
        <div class="welcome">
            <?php echo "<h3>Welcome " . $_SESSION['username'] . "</h3>"; ?>
        </div>
        <form class="login-box">
            <h2>Fill in the details</h2>
            <table>
                <tr class="user-box">
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr class="user-box">
                    <td>Website:</td>
                    <td><input type="url" name="website"></td>
                </tr>
                <tr class="user-box">
                    <td>Phone Number:</td>
                    <td><input type="tel" pattern="[6789]{1}[0-9]{9}" title="Phone number with 6-9 and remaing 9 digit with 0-9" name="phone"></td>
                </tr>
                <tr class="user-box">
                    <td>Address:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr class="user-box">
                    <td>City:</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr class="user-box">
                    <td>State:</td>
                    <td><input type="text" name="state"></td>
                </tr>
                <tr class="user-box">
                    <td>Country:</td>
                    <td><input type="text" name="country"></td>
                </tr>
                <tr class="user-box">
                    <td>Industry:</td>
                    <td>
                        <select name="industry">
                            <option value="">Select an Indsutry</option>
                            <option value="Account">Account</option>
                            <option value="IT">IT</option>
                            <option value="Sales">Sales</option>
                            <option value="Health Care">Health Care</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="user-box">
                <a id="sub" href="insertcompany.php"><input type="submit" id="button" name="submit"></a>
            </div>
        </form>
    </section>
    <a class="float2" href="logout.php">Logout</a>
</body>

</html>

<?php
if ($_GET['submit']) {
    $n = $_GET['name'];
    $wb = $_GET['website'];
    $ph = $_GET['phone'];
    $ad = $_GET['address'];
    $ci = $_GET['city'];
    $st = $_GET['state'];
    $co = $_GET['country'];
    $ind = $_GET['industry'];
    $query = "INSERT INTO COMPANIES VALUES('$n','$wb','$ph','$ad','$ci','$st','$co','$ind')";
    $add = mysqli_query($conn, $query);
    if ($add) {
        echo "<script type='text/javascript'>alert('Record inserted');
        window.location.href = 'insertcompany.php';
        </script>";
        exit;
    } else {
        echo "Failed to insert data";
    }
}
?>