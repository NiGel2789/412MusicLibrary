<?php
// parameters
if(isset($argc)){
$gender = $argv[1];
$uid = $argv[2];
$name = $argv[3];
$email = $argv[4];
$date = $argv[5];


// connect to database
$dbconn = pg_connect("host=localhost dbname=postgres user=postgres password=postgres")
    or die('Could not connect: ' . pg_last_error());

// postgres query 
$query = 'INSERT INTO users VALUES ('$gender', uid, '$name', '$email', '$date')';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo $result;

// release result
pg_free_result($result);

// close connection
pg_close($dbconn);
}
?>