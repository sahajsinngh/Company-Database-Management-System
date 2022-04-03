<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update/Delete Details</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>
    <h2>Edit/Delete Company Details</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <tr>
                <th>Name</th>
                <th>Website</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Industry</th>
                <th colspan="2" align="center">Operations</th>
            </tr>
            <?php
            include("connection.php");
            error_reporting(0);
            $query = "SELECT * FROM COMPANIES";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if ($total != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
                <tr>
                    <td>" . $result['Name'] . "</td>
                    <td>" . $result['Website'] . "</td>
                    <td>" . $result['Contact'] . "</td>
                    <td>" . $result['Address'] . "</td>
                    <td>" . $result['City'] . "</td>
                    <td>" . $result['State'] . "</td>
                    <td>" . $result['Country'] . "</td>
                    <td>" . $result['Industry'] . "</td>
                    <td><a href='edit.php?n=$result[Name]&wb=$result[Website]&ph=$result[Contact]&ad=$result[Address]&ci=$result[City]&st=$result[State]&co=$result[Country]&ind=$result[Industry]'>Edit</td>
                    <td><a href='delete.php?rn=$result[Website]'>Delete</td>
                </tr>";
                }
            } else {
                //echo "No records found";
            }
            ?>
        </table>
    </div>
    <a class="float2" href="logout.php">Logout</a>
    <a class="float1" href="insertcompany.php">Home</a>
</body>

</html>