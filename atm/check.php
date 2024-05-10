<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATM Balance Check</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image:url(https://img.freepik.com/premium-vector/abstract-atm-laptop-screen-digital-technology-blue-background-online-money-concept_201274-701.jpg);
  }

  .container {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    animation: fadeIn 0.5s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  .balance-icon {
    font-size: 48px;
    color: #4caf50;
    margin-bottom: 20px;
    animation: bounce 0.5s ease-in-out;
  }

  @keyframes bounce {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-10px);
    }
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
<div class="container">
  <div class="balance-icon">&#x20b9;</div>
  <div class="message">Your account balance is: <strong>&#8377; 50,000</strong></div>
  <button class="button" onclick="goBack()">Back to ATM</button>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>
</body>
</html>
