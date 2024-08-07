<!Doctype html>
<html>
<head>
    <title> PHP TEST PAGE </title>
</head>

<body>
<?php
$t = date("H");
if($t <"20"){
    echo"Have a good day";
}
else {
    echo"Have a good night";
}
?>
</body>

</html>
