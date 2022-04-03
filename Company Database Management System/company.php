<?php
include('connection.php');
$query = "SELECT * FROM COMPANIES";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies Database</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https:////cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>
    <div>
        <h3 align="center">Companies Database</h3>
    </div>
    <div>
        <table id="company_data">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Website</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Country</td>
                    <td>Industry</td>
                </tr>

            </thead>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '
                <tr>
                    <td>' . $row["Name"] . '</td>
                    <td>' . $row["Website"] . '</td>
                    <td>' . $row["Contact"] . '</td>
                    <td>' . $row["Address"] . '</td>
                    <td>' . $row["City"] . '</td>
                    <td>' . $row["State"] . '</td>
                    <td>' . $row["Country"] . '</td>
                    <td>' . $row["Industry"] . '</td>
                </tr>
                    ';
            }
            ?>
        </table>
    </div>
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

<script>
    $(document).ready(function() {
        $('#company_data').DataTable();
    });
</script>