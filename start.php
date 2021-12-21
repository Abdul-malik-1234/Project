<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Basic Banking System</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    body,
    html {
      height: 100%;
      margin: 0;
    }

    li {
      color: #72A0C1;
    }

    .a {
      list-style-type: none;
    }

    h1,
    h2 {
      color: #72A0C1;
      text-align: center;
    }

    .bg-img {
      height: 100%;
      width: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100%;
      background: #0000CD;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border-radius: 5px 5px 0 0;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      overflow: hidden;

    }

    nav a {
      display: inline-block;
      text-decoration: none;
      padding: 5px 15px;
      font-size: 0.9em;
      font-weight: bold;
      color: #72A0C1;
      text-transform: uppercase;
      letter-spacing: 0.05em;


    }

    nav img {
      width: 70%;
      display: block;
      margin-bottom: 35px;
    }

    main {
      margin-left: 250px;
      padding: 10px;
    }

    .ci {
      clip-path: circle();
    }
  </style>
</head>

<body style="background:#B0E0E6;">
  <script src="index.js"></script>
  <div class="bg-img">
    <img src="https://www.planetcompliance.com/wp-content/uploads/2020/10/agency-banking.jpg" alt="image not found" ; class="bg-img">
  </div>
  <form action="/malik/ta.php" method="post">
    <nav>

      <img src="https://www.bing.com/th?id=AMMS_S_577ab6b7-e46d-d078-e5c5-95aaa679e0f9&w=110&h=110&c=7&rs=1&qlt=95&pcl=f9f9f9&o=6&cdv=1&dpr=1.38&pid=16.1" class="ci" ; height="150px">
      <h1>Welcome to the Sparks foundation Bank</h1>
      <h2>Click on below links </h2>
      <ul>
        <li><a href="viewallcustomers.php">View all Customers</a></li>
        <li><a href="transfermoney.php">Transfer Money</a></li>
        <li> <a href="viewtransactions.php">View transactions</a></li>
        <li> <a href="https://www.thesparksfoundationsingapore.org/">About us</a>
          </ol>
          <ul class="a">
            <br>
            <br>
            <br>
            <br>
            <li>By Abdul Malik Pasha</li>
          </ul>
    </nav>
  </form>
</body>
</html>