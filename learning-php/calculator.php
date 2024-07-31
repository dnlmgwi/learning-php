<!doctype html>
<html lang="en">
<?php

// TODO: Develop a simple PHP Calculator program which be able to add, subtract, divide and multiply any entered two numbers.
// Start a new or resume an existing session
session_start();

// Initialize the session values if they don't exist
if (!isset($_SESSION['values'])) {
    $_SESSION['values'] = array('', '', ''); // [first number, operator, second number]
}

$result = ''; // Initialize result variable

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the current result from the form, or an empty string if not set
    $result = $_POST['result'] ?? '';
    
    // Handle button presses
    if (isset($_POST['value'])) {
        $value = $_POST['value'];
        $result .= $value; // Append the new value to the result string
        
        // Handle numeric input
        if (is_numeric($value)) {
            if ($_SESSION['values'][1] === '') {
                // If no operator has been entered, add to the first number
                $_SESSION['values'][0] .= $value;
            } else {
                // If an operator has been entered, add to the second number
                $_SESSION['values'][2] .= $value;
            }
        } 
        // Handle operator input
        elseif (in_array($value, ['+', '-', 'x', '÷'])) {
            $_SESSION['values'][1] = $value;
        }
    } 
    // Handle clear button
    elseif (isset($_POST['clear'])) {
        $result = clear();
        $_SESSION['values'] = array('', '', ''); // Reset session values
    } 
    // Handle calculate (equals) button
    elseif (isset($_POST['calculate'])) {
        if ($_SESSION['values'][2] !== '') {
            // Perform calculation if we have both numbers and an operator
            $result = calculate(
                floatval($_SESSION['values'][0]),
                $_SESSION['values'][1],
                floatval($_SESSION['values'][2])
            );
            // Set the result as the new first number for chaining operations
            $_SESSION['values'] = array($result, '', '');
        }
    }
}

// Main calculation function
function calculate($a, $op, $b) {
    switch ($op) {
        case '+': return add($a, $b);
        case '-': return subtract($a, $b);
        case 'x': return multiply($a, $b);
        case '÷': 
            if ($b == 0) return "Division by zero";
            return divide($a, $b);
        default:
            return "Invalid operator";
    }
}

// Clear function
function clear() {
    return "";
}

// Basic arithmetic functions
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />

    <title>Calculator</title>
</head>
<body>
    <div class="flex h-screen justify-center">
        <div class="flex items-center">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="flex flex-col items-center space-y-4 border-1 rounded-lg p-5 shadow-xl">
                    <div class="flex flex-col items-center space-y-4 mb-5 w-full">
                        <div class="flex flex-col items-center w-full">
                            <div class="flex flex-col items-start w-full p-4">
                            <input 
                                value="<?php echo $result; ?>"
                                type="text" 
                                class="p-3 rounded w-full text-right text-white shadow-inner bg-neutral-400 focus:outline-none focus:ring-0 focus:ring-grey-200 font-mono" 
                                name="result"
                                readonly
                                placeholder="0"
                            />
                            </div>
                            <div class="grid grid-cols-4 gap-2">                        
                                <div class="grid col-span-3 grid-cols-3 gap-2 w-full">                         
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="7">7</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="8">8</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="9">9</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="4">4</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="5">5</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="6">6</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="1">1</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="2">2</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="3">3</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="0">0</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 rounded-full" type="submit" name="value" value="00">00</button>
                                    <button class="bg-gray-200 hover:bg-gray-300 p-4 col-start-3 rounded-full" type="submit" name="value" value=".">.</button>
                                    <button class="bg-orange-500 hover:bg-orange-600 text-white p-4 col-span-3 rounded-full" type="submit" name="calculate">=</button>
                                </div>
                                <div class="grid grid-cols-1 col-start-4 gap-2">
                                    <button class="bg-red-500 hover:bg-red-600 text-white p-4 rounded-full" type="submit" name="clear">AC</button>
                                    <button class="bg-gray-400 hover:bg-gray-600 text-white p-4 rounded-full" type="submit" name="value" value="÷">÷</button>
                                    <button class="bg-gray-400 hover:bg-gray-600 text-white p-4 rounded-full" type="submit" name="value" value="x">x</button>
                                    <button class="bg-gray-400 hover:bg-gray-600 text-white p-4 rounded-full" type="submit" name="value" value="-">-</button>
                                    <button class="bg-gray-400 hover:bg-gray-600 text-white p-4 rounded-full" type="submit" name="value" value="+">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>