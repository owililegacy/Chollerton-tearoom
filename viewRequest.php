<?php
include("connection.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Requests</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body class="body2">
<div class="navArea">
        <ul>
        <li><form  action="index.html" method="get"><button >Home</button></form></li>
        <li><form action="findOutMore.php" method="get"><button>Find Out More</button></form></li>
        <li><form action="viewRequest.php" method="get"><button style="background-color: blue;">View Request</button></form></li>
        <li><form action="credits.php" method="get"><button>Credits</button></form></li>
        </ul>        
    </div>
    
    <img class="header1" src="images/logo.png" alt=""> 

    <table class="table1">
        <thead>
            <tr>
                <th>Fore Name</th>
                <th>Sur Name</th>
                <th>Postal Address</th>
                <th>Mobile Tell No</th>
                <th>Email</th>
                <th>Send Method</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("connection.php");
            $sql = "SELECT *FROM CT_expressedInterest ORDER BY surname";
            $result = $con->query($sql);

            if (!$result) {
                die("");
            }
            while ($row = $result->fetch_assoc()) {
                echo "
            <tr>
                <td>$row[forename]</td>
                <td>$row[surname]</td>
                <td>$row[postalAddress]</td>
                <td>$row[mobileTelNo]</td>
                <td>$row[email]</td>
                <td>$row[sendMethod]</td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>