<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $method = $_POST["name"];
    switch ($method) {
        case "rectangle":
            for ($i = 0; $i < 4; $i++) {
                echo "<br>" . "*";
                for ($j = 0; $j < 20; $j++) {
                    echo "*";
                }
            };
            break;
        case "botton-left":
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 0; $j <= 10; $j++) {
                    if ($j > $i) {
                        echo '&nbsp&nbsp;';
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            };
            break;
        case "top-left":
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 10; $j >= 0; $j--) {
                    if ($j < $i) {
                        echo '&nbsp&nbsp;';
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            };
            break;
        case "botton-right":
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 10; $j >= 0; $j--) {
                    if ($j > $i) {
                        echo '&nbsp&nbsp;';
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            };
            break;
        case "top-right":
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 0; $j <= 10; $j++) {
                    if ($j < $i) {
                        echo '&nbsp&nbsp;';
                    } else {
                        echo "*";
                    }
                }
                echo "<br>";
            };
            break;
        case "isosceles":
            for ($i = 0; $i <= 10; $i++) {
                for ($j = 10; $j >= 0; $j--) {
                    if ($i > $j) {
                        echo "*";
                    }
                    echo '&nbsp&nbsp;';
                }
                echo "<br>";
            };
            break;
    }
}
