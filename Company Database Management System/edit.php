<?php
include('connection.php');
error_reporting(0);
$n = $_GET['n'];
$wb = $_GET['wb'];
$ph = $_GET['ph'];
$ad = $_GET['ad'];
$ci = $_GET['ci'];
$st = $_GET['st'];
$co = $_GET['co'];
$ind = $_GET['ind'];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <form class="login-box">
        <table>
            <tr class="user-box">
                <td>Name:</td>
                <td><input type="text" value="<?php echo "$n" ?>" name="name"></td>
            </tr>
            <tr class="user-box">
                <td>Website:</td>
                <td><input type="url" value="<?php echo "$wb" ?>" name="website"></td>
            </tr>
            <tr class="user-box">
                <td>Phone Number:</td>
                <td><input type="tel" pattern="[6789]{1}[0-9]{9}" title="Phone number with 6-9 and remaing 9 digit with 0-9" value="<?php echo "$ph" ?>" name="phone"></td>
            </tr>
            <tr class="user-box">
                <td>Address:</td>
                <td><input type="text" value="<?php echo "$ad" ?>" name="address"></td>
            </tr>
            <tr class="user-box">
                <td>City:</td>
                <td><input type="text" value="<?php echo "$ci" ?>" name="city"></td>
            </tr>
            <tr class="user-box">
                <td>State:</td>
                <td><input type="text" value="<?php echo "$st" ?>" name="state"></td>
            </tr>
            <tr class="user-box">
                <td>Country:</td>
                <td><input type="text" value="<?php echo "$co" ?>" name="country"></td>
            </tr>
            <tr class="user-box">
                <td>Industry:</td>
                <td>
                    <select name=" industry">
                        <option value="">Select an Indsutry</option>

                        <option value=" Account" <?php
                                                    if ($ind == "Account") {
                                                        echo "selected";
                                                    } ?>>Account</option>

                        <option value="IT" <?php
                                            if ($ind == "IT") {
                                                echo "selected";
                                            } ?>>IT</option>

                        <option value="Sales" <?php
                                                if ($ind == "Sales") {
                                                    echo "selected";
                                                } ?>>Sales</option>

                        <option value="Health Care" <?php
                                                    if ($ind == "Health Care") {
                                                        echo "selected";
                                                    } ?>>Health Care</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="user-box">
            <a><input type="submit" value="Update Details" id="button" name="submit"></a>
        </div>
    </form>
    <a class="float2" href="logout.php">Logout</a>
    <a class="float1" href="insertcompany.php">Home</a>
    <style>
        .float1 {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            width: 100px;
            height: 60px;
            bottom: 40px;
            right: 150px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border-radius: 7px;
            text-align: center;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
        }

        .float2 {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            width: 100px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border-radius: 7px;
            text-align: center;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
        }
    </style>
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
    $query = "UPDATE COMPANIES SET Name='$n', Website='$wb', Contact='$ph', Address='$ad', City='$ci', State='$st', 
    Country='$co', Industry='$ind' WHERE NAME ='$n' ";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script type='text/javascript'>alert('Record Edited');
            window.location.href = 'insertcompany.php';</script>;";
    } else {
        echo " Failed to update Record";
    }
}

?>