<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Description = $_POST["description"];
    $Price = (int) $_POST["price"];
    $Percent = (int) $_POST["discount_percent"];
    if ($Price > 0 && $Percent > 0) {
        function sum($Price, $Percent)
        {
            $sum = $Price * ($Percent / 100) * 0.1;
            return $sum;
        }
    } else {
        $msg = "Giá niêm yết của sản phẩm và Tỷ lệ chiết khấu không hợp lệ";
    }
    $result = sum($Price, $Percent);
    function Giam($Price, $result)
    {
        $sum = $Price - $result;
        return $sum;
    }
    $result2 = Giam($Price, $result);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form method="post" action="display_discount.php">
            <div id="data">
                <label>Product Description:</label>
                <label><?= $Description ?></label><br />

                <label>List Price:</label>
                <label><?= "$" . $Price ?></label><br />

                <label>Discount Percent:</label>
                <label><?= $Percent . "%" ?></label><br />

                <label>Discount Amount:</label>
                <label><?= $result ?></label><br />

                <label>Discount Price:</label>
                <label><?= $result2 ?></label>
            </div>
        </form>
    </div>
</body>

</html>