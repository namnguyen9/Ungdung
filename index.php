<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value1 = $_POST["description"];
    $value2 = $_POST["discount_percent"];
    $method = $_POST["name"];
    switch ($method) {
        case "plus":
            echo "<h1>" . $value1  . '+' . $value2  . '=' . ($value1 + $value2) . "</h1>";
            break;
        case "minus":
            echo "<h1>" . $value1  . '-' . $value2  . '=' . ($value1 - $value2) . "</h1>";
            break;
        case "multiply":
            echo "<h1>" . $value1  . '*' . $value2  . '=' . ($value1 * $value2) . "</h1>";
            break;
        case "divide":
            if ($value1 != 0 && $value2 != 0) {
                echo "<h1>" . $value1  . '/' . $value2  . '=' . ($value1 / $value2) . "</h1>";
                break;
            } else {
                echo "<h2><span style = 'color:red'>Không hợp lệ</span></h2>";
        }
    }
}
