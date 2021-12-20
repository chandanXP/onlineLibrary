<?php

//Connecting to db
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookshopdb";

//create a connection object
$conn = mysqli_connect($servername, $username, $password, $database);
//Die if connection was not successful
if (!$conn) {
  die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
  echo '
  <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <strong>Success!</strong> connected to database: ' . '$database' . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
  ';
}

$sql = "SELECT * FROM `bookshelf`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
// $num = mysqli_num_rows($result);
// echo $num;
// echo "<br>";
// echo "Records found in $database <br> ";

//Display hte rows returned by the sql query

// if ($num > 0) {
//   //      $row = mysqli_fetch_assoc($result);
//   //      echo var_dump($row);
//   //      echo "<br>";
//   //      $row = mysqli_fetch_assoc($result);
//   //      echo var_dump($row);
//   //      echo "<br>";


//   while ($row = mysqli_fetch_assoc($result)) {
//     // echo var_dump($row);//var_dumP()  ----> is used to see the result in boolean form.
//     echo $row['title'] . " is starting at just " . $row['price'] . " Rs. , and " . $row['status'] . " in Book Shelf section. ";
//     echo "<br>";
//   }
// }

// $obj = mysqli_fetch_assoc($result);
// echo  $obj['title'];
// echo $num;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="index.css">
  <script type="text/javascript" src="index.js"></script>

  <title>Online Library</title>
</head>

<body>
  <div>
    <nav class="navbar navbar-light bg-dark ">
      <div class="container-fluid">
        <a class="navbar-brand" id="navTitle">Online Book Shop</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div>

  <div class="bg-dark text-light text-center p-5">
    <h1 class="banner" id="headLine">Welcome reader! let find your interest.</h1>
  </div>

  <div>
    <h3 class="bookAvailable" id="bookAvailable">Books in Shelf</h3>


  </div>
  <div class="row mb-4">

    <div class="col-sm-6 mb-2">
      <div class="card">
        <div class="card-body">
          <?php $row = mysqli_fetch_assoc($result); ?>
          <h5><?php echo $row['title'] ?></h5>
          <table>
            <tbody>
              <tr>
                <td>Price</td>
                <td><?php echo $row['price']; ?></td>
              </tr>
              <tr>
                <td>Status: </td>
                <td><?php echo $row['status'] ?></td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mb-2">
      <div class="card">
        <div class="card-body">
          <?php $row1 = mysqli_fetch_assoc($result); ?>
          <h5><?php echo $row1['title'] ?></h5>
          <table>
            <tbody>
              <tr>
                <td>Price</td>
                <td><?php echo $row1['price']; ?></td>
              </tr>
              <tr>
                <td>Status: </td>
                <td><?php echo $row1['status'] ?></td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mb-2">
      <div class="card">
        <div class="card-body">
          <?php $row2 = mysqli_fetch_assoc($result); ?>
          <h5><?php echo $row2['title'] ?></h5>
          <table>
            <tbody>
              <tr>
                <td>Price</td>
                <td><?php echo $row2['price']; ?></td>
              </tr>
              <tr>
                <td>Status: </td>
                <td><?php echo $row2['status'] ?></td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mb-2">
      <div class="card">
        <div class="card-body">
          <?php $row3 = mysqli_fetch_assoc($result); ?>
          <h5><?php echo $row3['title'] ?></h5>
          <table>
            <tbody>
              <tr>
                <td>Price</td>
                <td><?php echo $row3['price']; ?></td>
              </tr>
              <tr>
                <td>Status: </td>
                <td><?php echo $row3['status'] ?></td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mb-2">
      <div class="card">
        <div class="card-body">
          <?php $row4 = mysqli_fetch_assoc($result); ?>
          <h5><?php echo $row4['title'] ?></h5>
          <table>
            <tbody>
              <tr>
                <td>Price</td>
                <td><?php echo $row4['price']; ?></td>
              </tr>
              <tr>
                <td>Status: </td>
                <td><?php echo $row4['status'] ?></td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mb-2">
      <div class="card">
        <div class="card-body">
        <?php $row5 = mysqli_fetch_assoc($result); ?>
          <h5><?php echo $row5['title'] ?></h5>
          <table>
            <tbody>
              <tr>
                <td>Price</td>
                <td><?php echo $row5['price']; ?></td>
              </tr>
              <tr>
                <td>Status: </td>
                <td><?php echo $row5['status'] ?></td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Add To Cart</a>
        </div>
      </div>
    </div>
  </div>

  <div>
    <div class="row">
      <div class="col-sm-6 ">
        <div class="card">
          <div class="card-body">
            <h5>My Cart:</h5>
            <table class='table table-borderless table-success '>
              <thead>
                <td>Book</td>
                <td>Due date</td>

              </thead>
              <tbody>
                <td>Micro biology</td>
                <td>20/03/20</td>
              </tbody>
            </table>
            <a href="#" class="btn btn-primary">Buy Now!</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5>Amount: </h5>
            <h1 class="card-title light-green-text" class="light-green-text">5032.50 Rs</h1>

            <a href="#" class="btn btn-primary">Add Amount</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var listElement = document.getElementsByClassName("first");
    var statusVal = document.getElementById("bookStatus");
    var colorBg = document.getElementById("buyBtn");
    var buy = document.getElementById("firstCell");
    var available = document.getElementById("bookAvailable");

    colorBg.addEventListener("click", () => {
      // console.log("Success! addEventListener is working")
      // colorBg.innerHTML = "Success! addEventListener is working";
      available.classList.add("sample");
      statusVal.classList.add("sample");
    });

    function buyBook() {
      buy.innerHTML = "You bought this book!";
      statusVal.innerHTML = "Sold Out";
    }
  </script>
</body>

</html>