<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ATM लेनदेन</title>
  <script src="https://kit.fontawesome.com/3d29b6bcdf.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url(https://png.pngtree.com/background/20230525/original/pngtree-an-atm-machine-in-a-dark-room-picture-image_2739849.jpg);
    }
    .container {
      width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      font-size: 1.5em;
      color: #333;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-size: 1.1em;
      color: #555;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1em;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #27ae60;
      border: none;
      border-radius: 5px;
      color: #fff;
      font-size: 1.1em;
      cursor: pointer;
    }
    .button{
      background-color:green;
      color:white;
                    padding:10px;
                    width:400px;
                    text-decoration:none;
                    border-radius:5px;
                    font-size:1.1em;
                    cursor:pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><i class="fa-sharp fa-solid fa-building-columns"></i>&nbsp;&nbsp;&nbsp;ATM लेनदेन</h1>
    <form action="transaction.php" method="post">
      <label for="account_number"> <i class="fa-regular fa-user"></i>&nbsp;&nbsp;खाता संख्या:</label>
      <input type="text" id="account_number" name="account_number" required>
      <label for="password"><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;पासवर्ड:</label>
      <input type="password" id="password" name="password" required>
      <button class="button"><a href="kesh.php">लॉगिन</button>
    </form>
  </div>
</body>
</html>
