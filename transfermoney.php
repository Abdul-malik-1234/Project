<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTML 5 Boilerplate</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  .container {
    padding: 16px;
  }

  h1 {
    text-align: left;
    color: #002244;
  }

  table {
    width: 100%;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  .abcd:hover {
    background-color: #26C6DA;
  }

  table.menu {
    width: auto;
    display: inline-table;
  }

  input[type=text],
  input[name=amount] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: #2196F3;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
  }

  button:hover {
    opacity: 0.8;
  }
</style>

<body>
  <script src="index.js"></script>
  <div>
    <br>
    <?php
    function dispbalance($a)
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "start";
      $conn = mysqli_connect($servername, $username, $password, $database);
      // echo "Connection was succesful"; 
      //Die if connection was not successful
      if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
      }
      $sql = "SELECT currentbalance from fo WHERE name='$a';";
      $result = mysqli_query($conn, $sql);
      $rw = mysqli_fetch_assoc($result);
      $a = $rw['currentbalance'];
      echo $a;
    }
    ?>
  </div>
  <table>
    <tr>
      <td>
        <h1>Please enter sender and reciever names</h1>
        <div class="container">
          <form action="/malik/sparks/enterdata.php" method="post">
            <label for="uname"><b>From</b></label><br>
            <input type="text" name="nm1" placeholder="Enter Sender name"><br>
            <label for="uname"><b>To</b></label><br>
            <input type="text" name="nm2" placeholder="Enter Receiver name"><br>
            <label for="uname"><b>Amount</b></label><br>
            <input name="amount" placeholder="Enter Amount"><br>
            <button type="submit">Transfer</button>
      </td>
      </div>
      </form>
      <div style="text-align: right">
        <td>
          <table>
            <thead>
              <b>Customers:</b>
            </thead>
            <tr class="abcd">
              <td>Abdul Malik</td>
            </tr>
            <tr class="abcd">
              <td>Saikiran</td>
            </tr>
            <tr class="abcd">
              <td>Masood</td>
            </tr>
            <tr class="abcd">
              <td>Kishore</td>
            </tr>
            <tr class="abcd">
              <td>Aditi Musunur</td>
            </tr>
            <tr class="abcd">
              <td>Advitiya Sujeet</td>
            </tr>
            <tr class="abcd">
              <td>Alagesan Poduri</td>
            </tr>
            <tr class="abcd">
              <td>Amrish Ilyas</td>
            </tr>
            <tr class="abcd">
              <td>Aprativirya Seshan</td>
            </tr>
            <tr class="abcd">
              <td>Asvathama Ponnada</td>
            </tr>

          </table>
        </td>
    </tr>
  </table>
  </div>
  <div class="a">
  </div>
</body>

</html>