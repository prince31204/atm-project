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
    background-image:url(https://l450v.alamy.com/450v/p5adgt/currency-concept-atm-machine-on-digital-background-p5adgt.jpg);
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
    background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSIMpcASlplJAqPgBcXXZcRPL1oyB3aIgS4FmG4ZfumQ&s);
    color: #fff;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    transition: transform 0.5s ease-in-out;
  }

  .keyboard {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
    margin-top: 20px;
  }

  .button {
    padding: 15px;
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

  .button.clear {
    grid-column: span 3;
  }

  .currency-selector {
    margin-top: 20px;
    text-align: center;
  }

  .currency-selector select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
  }

  .animate-shake {
    animation: shake 0.3s ease-in-out;
  }
h1{
  color:black;
  background-color:white;
}
  @keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
  }
</style>
</head>
<body>
<div class="atm-container">
  <div class="screen">
  <h1>Enter Your Amount </h1>
  </div>
  <div class="keyboard">
    <button class="button" value="1">1</button>
    <button class="button" value="2">2</button>
    <button class="button" value="3">3</button>
    <button class="button" value="4">4</button>
    <button class="button" value="5">5</button>
    <button class="button" value="6">6</button>
    <button class="button" value="7">7</button>
    <button class="button" value="8">8</button>
    <button class="button" value="9">9</button>
    <button class="button clear" value="0">0</button>
    <button class="button cancel">Cancel</button>
    <button class="button enter"><a href="success.php">Enter</button>
  </div>
  
</div>

<script>
  const screen = document.querySelector('.screen');
  const buttons = document.querySelectorAll('.button');
  const currencySelector = document.getElementById('currency');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      if (button.classList.contains('clear')) {
        clearScreen();
      } else if (button.classList.contains('cancel')) {
        cancelTransaction();
      } else if (button.classList.contains('enter')) {
        confirmTransaction();
      } else {
        updateScreen(button.value);
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
    const amount = parseFloat(screen.textContent);
    const currency = currencySelector.value;
    if (!isNaN(amount)) {
      screen.textContent = `Transaction successful: ${amount.toFixed(2)} ${currency}`;
      clearScreen();
    } else {
      screen.textContent = 'Invalid amount';
    }
  }
</script>
</body>
</html>
