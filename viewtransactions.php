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
    body{
      background:#F0F8FF;
    }
table {
  border-collapse: collapse;
  margin: 25px 0;
  width: 50%;
  margin-left:auto;margin-right:auto;
  /* background: #CCCCFF; */
  background-color:#ddd;
  border-radius: 5px 5px 0 0;
  box-shadow: 0 0 20px rgba(0,0,0,0.15);
  overflow: hidden;
}
h1{
  text-align: center;
  color:#002244;
}
th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  font-weight: bold;
}
tr:hover {background-color: #9fd3c7;}
</style>
  <body>
	<script src="index.js"></script>
  <h1> List of all transactions</h1>
  <?php
          // echo "connecting to database";
          // $table="fo";
          //Create a connection object
            $servername="localhost";
            $username="root";
            $password="";
            $database="start";
            $conn =mysqli_connect($servername,$username,$password,$database);
            // echo "Connection was succesful"; 
            //Die if connection was not successful
            if(!$conn){
                die("Sorry we failed to connect: ".mysqli_connect_error());
            }
            $sql = "SELECT COUNT(id) FROM trans;";
            $result = mysqli_query($conn, $sql);
            $rw=mysqli_fetch_assoc($result);
            // print_r($rw);
            $val=$rw['COUNT(id)'];
            // echo $val;
            $b=1;
            ?>
            <table>
            <tr>
                <th>SNo.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
            </tr>
            <?php
            while($val>0){
              ?>
              <?php
              $sql="SELECT * FROM trans WHERE id='$b'";
              $result = mysqli_query($conn, $sql);
              $rw=mysqli_fetch_assoc($result);
              ?>
              <tr>
              <td><?php echo $rw['id'];?></td>
              <td><?php echo $rw['neo'];?></td>
              <td><?php echo $rw['neb'];?></td>
              <td><?php echo $rw['am'];?></td>
              </tr>
              <?php
              $b+=1;
              $val-=1;
            }?> 
            </table>
  </body>
</html>