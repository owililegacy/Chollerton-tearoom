<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php';
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $postalAddress = $_POST['postalAddress'];
    $mobileTelNo = $_POST['mobileTelNo'];
    $email = $_POST['email'];
    $catID = $_POST['catID'];
    $sendMethod = $_POST['sendMethod'];

    $sql = "insert into `CT_expressedInterest`(forename,surname,postalAddress,mobileTelNo,email,catID,sendMethod) values('$forename','$surname','$postalAddress','$mobileTelNo','$email','$catID','$sendMethod')";
    $result = mysqli_query($con, $sql);

    if ($result) {
header("location: index.html");
    }else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Find Out More</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body class="body2">
    <script>
        alert("Fill in Entries Below");
    </script>
<div class="navArea">
        <ul>
        <li><form  action="index.html" method="get"><button >Home</button></form></li>
        <li><form action="findOutMore.php" method="get"><button style="background-color: blue;">Find Out More</button></form></li>
        <li><form action="viewRequest.php" method="get"><button>View Request</button></form></li>
        <li><form action="credits.php" method="get"><button>Credits</button></form></li>
        </ul>        
    </div>
    
    <img class="header1" src="images/logo.png" alt=""> 

        <h2 class="instruction1">Fill in Entries Below</h2>

    <form action="findOutMore.php" method="post" onsubmit="displayAlert()">
        <div class="form">
                <label for="forename">
                   Forename
                </label>
                <input class="input1" type="text" name="forename" placeholder="Enter forename" value="" id="forename" required>
                <label for="surname">
                   Surname
                </label>
                <input class="input1" type="text" name="surname" placeholder="Enter surname" value="" id="surname" required>
                <label for="postalAddress">
                   Postal Address
                </label>
                <input class="input1" type="text" name="postalAddress" placeholder="Enter postal Address" value="" id="postalAddress" required>
                <label for="mobileTelNo">
                   Mobile Number
                </label>
                <input class="input1" type="tel" name="mobileTelNo" pattern="[0-9]{10}" placeholder="Enter Mobile No." value="" id="mobileTelNo" required>
                <label for="email">
                   Email Address
                </label>
                <input class="input1" type="email" name="email" placeholder="Enter Email" value="" id="email" required>
            
                <h3> Select Facility</h3>
                <div class="inputs2Div">
            <input class="input2" type="radio" value="c1" name="catID" required>Tearoom <br>
            <input class="input2" type="radio" value="c2" name="catID">Craft Shop <br>
            <input class="input2" type="radio" value="c3" name="catID">Village Store <br>
            <input class="input2" type="radio" value="c4" name="catID">Post Office <br>
            <input class="input2" type="radio" value="c5" name="catID">Bed and Breakfast
                </div>                   
            
              <h3>Select Method of Contact</h3> 
              <div class="inputs2Div">
                <input class="input2" type="radio" value="email" name="sendMethod" required>Email
            <input class="input2" type="radio" value="post" name="sendMethod">Post
            <input class="input2" type="radio" value="SMS" name="sendMethod">SMS
              </div>          

            <br>
            <br>
            <button type="submit">SUBMIT</button>
        </div>
    </form>

    <script>
    function displayAlert() {
        alert("Your form has been submitted successfully.");
    }
    
</script>
</body>
</html>