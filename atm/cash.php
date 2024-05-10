<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ATM Transactions</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image:url(https://c8.alamy.com/comp/J7CG91/currency-concept-atm-machine-on-digital-background-J7CG91.jpg);
  }

  .atm-container {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
  }

  .screen {
    width: 100%;
    height: 200px;
    background-image:url(https://c8.alamy.com/comp/J7CG91/currency-concept-atm-machine-on-digital-background-J7CG91.jpg);
    color: #fff;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    transition: transform 0.5s ease-in-out;
  }
  .button {
    padding: 6px;
    margin:3px;
    background-color: #4caf50;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-decoration:none;
  }
  

  .button:hover {
    background-color: #45a049;
  }

  .button.clear {
    grid-column: span 2;
  }

  .button.cancel {
    background-color: #f44336;
  }

  .button.cancel:hover {
    background-color: #d32f2f;
  }

  .button.enter {
    background-color: #2196f3;
  }

  .button.enter:hover {
    background-color: #1976d2;
  }

  .animate-shake {
    animation: shake 0.3s ease-in-out;
  }

  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }

  .balance-animation {
    animation: balance 0.5s ease-in-out;
  }

  @keyframes balance {
    0% { transform: translateY(-10px); }
    100% { transform: translateY(0); }
  }
</style>
</head>
<body>
<div class="atm-container">
  <div class="screen">
    Welcome to MyBank ATM
  </div>
  <div class="keyboard">
    <button class="button check-balance"><a href="check.php">Check Balance</button>
    <button class="button withdraw"><a href="transaction.php"><i class="fa-solid fa-language"></i>&nbsp;&nbsp;withdrawMoney</a></button>
    <button class="button clear"><a href="help.php">Help</button>
    <button class="button cancel"><a href="main.php">Cancel</button>
  </div>
</div>

<script>
  const screen = document.querySelector('.screen');
  const buttons = document.querySelectorAll('.button');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      if (button.classList.contains('clear')) {
        clearScreen();
      } else if (button.classList.contains('cancel')) {
        cancelTransaction();
      } else if (button.classList.contains('enter')) {
        confirmTransaction();
      } else if (button.classList.contains('check-balance')) {
        checkBalance();
      } else if (button.classList.contains('withdraw')) {
        withdrawMoney();
      } else if (button.classList.contains('deposit')) {
        depositMoney();
      }
    });
  });

  function updateScreen(value) {
    screen.textContent += value;
  }

  function clearScreen() {
    screen.textContent = '';
  }

  function cancelTransaction() {
    screen.textContent = 'Transaction canceled';
    screen.classList.add('animate-shake');
    setTimeout(() => {
      screen.classList.remove('animate-shake');
      clearScreen();
    }, 500);
  }

  function confirmTransaction() {
    const amount = parseInt(screen.textContent);
    if (!isNaN(amount)) {
      screen.textContent = `Transaction successful: $${amount}`;
      clearScreen();
    } else {
      screen.textContent = 'Invalid amount';
    }
  }

  function checkBalance() {
    const balance = 5000; // Example balance
    screen.textContent = `Current Balance: $${balance}`;
    screen.classList.add('balance-animation');
    setTimeout(() => {
      screen.classList.remove('balance-animation');
    }, 500);
  }

  function withdrawMoney() {
    screen.textContent = 'Enter amount to withdraw';
  }

  function deposi
