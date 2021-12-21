<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balance</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table {
  border-collapse: collapse;
  margin: 25px 0;
  width: 50%;
  margin-left:auto;margin-right:auto;
  background-color:#B0C4DE;
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
tr:hover {background-color: #E1EBEE;}
</style>
<body>
    <script src="index.js"></script>
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
    function dispemailid($a)
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
        $sql = "SELECT emailid from fo WHERE name='$a';";
        $result = mysqli_query($conn, $sql);
        $rw = mysqli_fetch_assoc($result);
        $a = $rw['emailid'];
        echo $a;
    }

    ?>
    <h1 align='center'>All customers</h1>
    <table cell spacing="15">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email id</th>
            <!-- <th>Current Balance</th> -->
        </tr>
        <tr>
            <?php $name1 = 'Abdul Malik'; ?>
            <td>1</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Saikiran'; ?>
            <td>2</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Masood'; ?>
            <td>3</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Kishore'; ?>
            <td>4</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Aditi Musunur'; ?>
            <td>5</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Advitiya Sujeet'; ?>
            <td>6</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Alagesan Poduri'; ?>
            <td>7</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Amrish Ilyas'; ?>
            <td>8</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Aprativirya Seshan'; ?>
            <td>9</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
        <tr>
            <?php $name1 = 'Asvathama Ponnada'; ?>
            <td>10</td>
            <td><?php echo $name1; ?></td>
            <td><?php dispemailid($name1); ?></td>
            <!-- <td><?php dispbalance($name1); ?></td> -->
        </tr>
    </table>
   
</div>
</body>

</html>