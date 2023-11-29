<!DOCTYPE html>
<html lang="en">

<head>
    <title>Credits Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body class="body2">
    <div class="navArea">
        <ul>
            <li>
                <form action="index.html" method="get"><button>Home</button>
                </form>
            </li>
            <li>
                <form action="findOutMore.php" method="get"><button>Find Out More</button></form>
            </li>
            <li>
                <form action="viewRequest.php" method="get"><button>View Request</button></form>
            </li>
            <li>
                <form action="credits.php" method="get"><button
                        style="background-color:blue;">Credits</button></form>
            </li>
        </ul>
    </div>

    <img class="header1" src="images/logo.png" alt=""> 

    <div class="creditsMain">
        <div class="credits">
            <div class="credit1">
                <h2>Personal Details</h2>
                <p><b>NAME:</b> </p><br>
                <p><b>ID: </b> </p><br>
                <p><b>EMAIL:</b> </p><br>
            </div>

            <div class="credit2">
                <h2>Image Sources</h2>
                <p><b>Source Image:</b> Bed and breakfast icon.png - Used as Bed and Breakfast icon -
                    https://cdn3.iconfinder.com/data/icons/hotels-b-b-and-cabins-1/50/Hotels_BB_and_Cabins_Outline-74-512.png
                </p>
                <p><b>Source Image:</b> chollertonLogo.jpg - Used as website logo - www.istockphoto.com/photos/tea-shop</p>
                <p><b>Source Image:</b> newsIcon.png - Used as Related news icon -
                    https://richmondvalley.nsw.gov.au/wp-content/uploads/2019/04/news.png</p>
                <p><b>Source Image:</b> Relevant icon.png - Used as Relevant Content icon -
                    https://static.thenounproject.com/png/1852965-200.png</p>
                <p><b>Source Image:</b> teaIcon.jpeg - Used as Tearoom icon-
                    https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoqGq2bLKm4IfiZLAoBffCvvtgswrucJc5xZaAe4M&s
                </p>
                <p><b>Source Image:</b> chollertonLogo.jpeg- Used on index page-
                   unavailable
                </p>
                <p><b>Source Image:</b> istockphoto1.jpg - Used on index page-
                www.istockphoto.com/photos/tea-shop
                </p>
                <p><b>Source Image:</b> istockphoto2.jpg - Used on index page-
                www.istockphoto.com/photos/tea-shop
                </p>
            </div>
        </div>

        <div class="credit3">
            <h2>Security Consideration</h2>
            <p><b>Query Injection: </b>Hackers can manipulate data in the database by inserting queries that might
                update, delete or insert data in the database tables. To prevent injection attacks it is important to
                implement input validation queries</p>
        </div>
        <div class="credit3">
            <p><b>Data in the database is unencripted: </b>Data in the database should be encrypted in transist and at
                rest to prevent unauthorised access or tempering of data in the database. </p>
        </div>

        <p><b>Reference:</b> https://www.tutorialspoint.com</p>
    </div>
</body>

</html>