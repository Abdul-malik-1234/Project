<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  .a {
    background: "#003399";
  }
</style>

<body>
  <script src="index.js"></script>
  <?php
  // echo "connecting to database";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "start";
  $name1 = $_POST["nm1"];
  // echo $name1;
  $name2 = $_POST["nm2"];
  $amount = $_POST["amount"];

  // $table="fo";
  //Create a connection object
  $conn = mysqli_connect($servername, $username, $password, $database);
  // echo "Connection was succesful"; 
  //Die if connection was not successful
  if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
  }
  $sql = "SELECT currentbalance from fo WHERE name='$name1';";
  $result = mysqli_query($conn, $sql);
  $rw = mysqli_fetch_assoc($result);
  $a=0;
  if(isset($rw['currentbalance'])){
    $a = $rw['currentbalance'];
  }
  // $a = $rw['currentbalance'];
  $sql = "SELECT currentbalance from fo WHERE name='$name2';";
  $result = mysqli_query($conn, $sql);
  $rw = mysqli_fetch_assoc($result);
  $b = $rw['currentbalance'];
  $a -= $amount;
  $sql = "UPDATE fo SET currentbalance='$a' WHERE name='$name1';";
  $result = mysqli_query($conn, $sql);
  $b += $amount;
  $sql = "UPDATE fo SET currentbalance='$b' WHERE name='$name2';";
  $result = mysqli_query($conn, $sql);
  echo " Money transferred of Rs  " . $amount . " from " . $name1 . " to " . $name2;
  $sql = "INSERT INTO `trans`(`neo`, `neb`, `am`) VALUES ('$name1','$name2','$amount');";
  $result = mysqli_query($conn, $sql);
  ?>
  <a href="viewtransactions.php">click this to view transactions</a>

</body>

</html>