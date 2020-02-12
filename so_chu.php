<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type="number"] {
            width: 200px;
            font-size: 16px;
            border: 3px solid rgba(104, 10, 228, 0.8);
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
            border: solid blue;
        }
    </style>
</head>

<body>
    <form method="POST">
        <input type="number" name="number" placeholder="Nhập số cần đọc">
        <input type="submit" id="submit" value="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["number"];
        if ($num >= 0 && $num < 1000) {
            if ($num < 10 && $num >= 0) {
                switch ($num) {
                    case 0:
                        echo "zero";
                        break;
                    case 1:
                        echo "one";
                        break;
                    case 2:
                        echo "two";
                        break;
                    case 3:
                        echo "three";
                        break;
                    case 4:
                        echo "four";
                        break;
                    case 5:
                        echo "five";
                        break;
                    case 6:
                        echo "six";
                        break;
                    case 7:
                        echo "seven";
                        break;
                    case 8:
                        echo "eight";
                        break;
                    case 9:
                        echo "night";
                        break;
                }
                // } else if($num >=10 && $num <20) {

            // }
            } else {
                echo "<h2>"."Out of ability"."</h2>";
            }
        }
    }
    ?>
</body>

</html>