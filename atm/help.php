<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATM Transaction Help</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image:url(https://im.indiatimes.in/content/2020/Jul/Indian-currency---Indian-rupee-symbol_5f15469445976.jpg?w=1200&h=900&cc=1&webp=1&q=75);
  }

  .container {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-image:url(https://knowindia.india.gov.in/assets/images/national_currency_inner.jpg);
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

  .instruction-icon {
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

  .instruction {
    font-size: 18px;
    color: #333;
    margin-bottom: 20px;
    animation: slideIn 0.5s ease-in-out;
  }

  @keyframes slideIn {
    from {
      transform: translateY(-20px);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
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
    animation: fadeIn 0.5s ease-in-out;
  }

  .button:hover {
    background-color: #45a049;
  }

  .button:focus {
    outline: none;
  }
</style>
</head>
<body>
<div class="container">
  <div class="instruction-icon">&#x1F4DD;</div>
  <div class="instruction">Welcome to MyBank ATM!</div>
  <div class="instruction">Please follow these important instructions:</div>
  <div class="instruction">1. Keep your PIN secure and do not share it with anyone.</div>
  <div class="instruction">2. Cover the keypad while entering your PIN.</div>
  <div class="instruction">3. Always check for skimming devices before using the ATM.</div>
  <div class="instruction">4. Do not leave your ATM card unattended.</div>
  <div class="instruction">5. If you suspect any suspicious activity, report it immediately.</div>
  <button class="button" onclick="goBack()">Back to ATM</button>
</div>

<script>
  function goBack() {
    window.history.back();
  }
</script>
</body>
</html>
