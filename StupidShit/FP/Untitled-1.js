// Arrow Functions
const greet = name => `Hello, ${name}!`;
const toUpperCase = str => str.toUpperCase();
const getLength = str => str.length;
const isEven = num => num % 2 === 0;

// Event Handlers
function testGreet() {
  const name = document.getElementById("greetName").value;
  const result = greet(name);
  document.getElementById("greetResult").textContent = result;
}

function testToUpperCase() {
  const input = document.getElementById("uppercaseInput").value;
  const result = toUpperCase(input);
  document.getElementById("uppercaseResult").textContent = result;
}

function testGetLength() {
  const input = document.getElementById("lengthInput").value;
  const result = getLength(input);
  document.getElementById("lengthResult").textContent = `Length: ${result}`;
}

function testIsEven() {
  const input = document.getElementById("numberInput").value;
  const result = isEven(Number(input));
  document.getElementById("evenOddResult").textContent = result
    ? "Even Number"
    : "Odd Number";
}
