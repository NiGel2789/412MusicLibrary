<!DOCTYPE html>
<html>
<head>
    <title>Successful Create</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>

</head>
<body>
<?php
// parameters
if(isset($_POST['name'])){
$gender = $_POST['gender'];
$uid = $_POST['uID'];
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];


// connect to database
$dbconn = pg_connect("host=localhost dbname=postgres user=postgres password=postgres")
    or die('Could not connect: ' . pg_last_error());

// postgres query 
$query = "INSERT INTO admin VALUES ('" . $gender . "' , '" . $uid . "' , '" . $name . "','" . $email . "','" . $date . "')";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());


// release result
pg_free_result($result);

// close connection
pg_close($dbconn);
}
?>
    <!-- Header -->
    <header id="header" class="alt">
        <a href="index.html" class="logo"><strong>Musicify</strong> <span>audio's new home</span></a>
        <nav>
            <a href="listings.php">Home</a>
        </nav>
    </header>

    <div class="login">
        <header class="major">
            <h1>Create Successful</h1>
        </header>
        <input type="button" name="log" id="log" onclick="window.location.href='../admin.html';" value="Back to Admin Tools">
    </div>
    <div style="height:200px; width:100%; clear:both;"></div>
</body>
</html>
