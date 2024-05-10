<!DOCTYPE html>
<html lang="hi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>एटीएम - नकदी निकालें और बैलेंस जांचें</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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

  .atm-icon {
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
  <div class="atm-icon">&#x1F4B3;</div>
  <div class="instruction">कृपया एक कार्रवाई का चयन करें:</div>
  <button class="button" onclick="withdrawCash()">नकदी निकालें</button>
  <button class="button" onclick="checkBalance()">बैलेंस जांचें</button>
</div>


</body>
</html>
