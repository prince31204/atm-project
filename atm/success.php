<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATM Transaction Complete</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
body{
    background-image:url(https://c8.alamy.com/comp/D229G7/a-woman-finger-type-a-digital-code-to-take-cash-money-with-a-atm-on-D229G7.jpg);
}
  .message-container {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-image:url(https://storage.googleapis.com/realtyplusmag-news-photo/news-photo/112281.Step-towards-Digital-Economy-and-Financial-Inclusion-through-Digital-India.jpg);
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .success-icon {
    font-size: 48px;
    color: #4caf50;
    margin-bottom: 20px;
  }

  .message {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
  }

  .button {
    padding: 10px 20px;
    background-color: #4caf50;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .button:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
<div class="message-container">
  <div class="success-icon">&#10004;</div>
  <div class="message">Transaction Successful</div>
  <div><h4>Collect your Money </div>
  <button class="button" onclick="goBack()"><a href="main.php">Back to ATM</button>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>
</body>
</html>
