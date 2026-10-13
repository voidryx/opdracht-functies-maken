```php
<?php
// Functies toevoegen

function getNumber($message) {
    return (float) readline($message);
}

function getOperation() {
    return readline("Enter operation (+, -, *, /): ");
}

function calculate($num1, $num2, $operation) {
    if ($operation == "+") {
        return $num1 + $num2;
    } elseif ($operation == "-") {
        return $num1 - $num2;
    } elseif ($operation == "*") {
        return $num1 * $num2;
    } elseif ($operation == "/") {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Error: Division by zero!";
        }
    } else {
        return "Invalid operation!";
    }
}

// Calculator
while (true) {
    echo "Simple Calculator\n";

    $num1 = getNumber("Enter first number: ");
    $operation = getOperation();
    $num2 = getNumber("Enter second number: ");

    $result = calculate($num1, $num2, $operation);

    echo "Result: $result\n";
}
?>
```