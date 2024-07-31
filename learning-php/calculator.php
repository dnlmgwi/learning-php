<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />

    <title>PHP Calculator</title>
</head>
<script>
    
</script>
<?php

// TODO: Develop a simple PHP Calculator program which be able to add, subtract, divide and multiply any entered two numbers.
$result = 0;

$num1 = 0;

$num2 = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['value'])) {
        $result = $_POST['result'] . $_POST['value'];
    } elseif (isset($_POST['clear'])) {
        $result = 0;
    } 
    elseif (isset($_POST['calculate'])) {
        $result = calculate();
    }
}

function add() {
  echo "Add!";
}

function subtract() {
  echo "subtract!";
}

function divide() {
  echo "divide!";
}

function multiply() {
  echo "multiply!";
}

function clear() {
  echo "clear!";
}

function calculate() {
  echo "equals!";
}
?>

<body>
    <div class="flex h-screen justify-center">
        <div class="flex items-center">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="flex flex-col items-center space-y-4 border-2 rounded-lg">
                    <div class="flex flex-col items-center space-y-4 mb-5 w-full">
                        <div class="flex flex-col items-center w-full">
                            <div class="flex flex-col items-start w-full p-4">
                            <input 
                                value="<?php echo $result; ?>"
                                type="text" 
                                class="p-3 rounded w-full text-right bg-gray-100 focus:outline-none focus:ring-0 focus:ring-blue-500" 
                                name="result" 
                                id="result" 
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
                                    <button class="bg-gray-400 hover:bg-gray-600 text-white p-4 rounded-full" type="submit" name="value" value="/">/</button>
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