<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="number" min="1" name="number" placeholder="Nhập số lượng số nguyên tố">
        <input type="submit" value="Print">
    </form>
    <?php
    function isPrime($num)
    {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = (int) $_POST["number"];
        $count = 0;
        $num = 2;
        $str = "";
        if ($number > 0) {
            while ($count < $number) {
                if (isPrime($num)) {
                    $str .= $num;
                    $count++;
                    $str .= $count % 10 == 0 ? "<br>" : "&nbsp;";
                }
                $num++;
            }
        }
        echo $str;
    }
    ?>
</body>

</html>