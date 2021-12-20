<?php

//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookshopdb";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful
if (!$conn){
     die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was sucessful.<br>";
}

$sql = "SELECT * FROM `bookshelf`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
echo "Records found in $database <br> ";

//Display hte rows returned by the sql query

if ($num > 0){
//      $row = mysqli_fetch_assoc($result);
//      echo var_dump($row);
//      echo "<br>";
//      $row = mysqli_fetch_assoc($result);
//      echo var_dump($row);
//      echo "<br>";


while($row = mysqli_fetch_assoc($result)){
     // echo var_dump($row);//var_dumP()  ----> is used to see the result in boolean form.
     echo $row['title']." is starting at just ". $row['price']." Rs. , and ". $row['status']. " in Book Shelf section. ";
     echo "<br>";
}

}

?>

<html>
     <head>
          <title>Testing db variables</title>
     </head>
     <body>

          <h2>Welcome to our raw Database called: <?php echo " $database "; ?></h2>
     
     </body>
</html>