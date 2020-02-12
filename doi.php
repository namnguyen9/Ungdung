<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["name"];
    $value1 = $_POST["sotien"];
    // $usd;
    // $vnd;
    // $msg;
    if ($value1 > 0) {
        switch ($value) {
            case "vnd":
                $usd = $value1 / 23000;
                $smg = '23000VND/USD';
                break;
            case "usd":
                $vnd = $value1 * 23000;
                $smg = '1USD/23000VND';
                break;
        }
    }
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
            padding: 2px 20px 20px;
            background: white;
            border: 4px solid navy;
        }

        h1 {
            width: 450px;
            margin: 0 auto;
            background: white;
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

        select {
            float: left;
            margin-bottom: .5em;
        }

        #conten {
            color: blue;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1 id="conten">Chuyển Đổi Tiền Tệ</h1>
        <fieldset>
            <legend>Tiền Việt && Tiền Đô</legend>
            <form>
                <div id="data">
                    <label>Số tiền:</label>
                    <?php
                    if (!empty($vnd)) : ?>
                        <label><?= "$".$value1 ?></label>
                    <?php endif ?>
                    <?php
                    if (!empty($usd)) : ?>
                     <label><?= $value1."VND" ?></label>
                    <?php endif ?>
                    <br />


                    <label>Tỉ giá:</label>
                    <?php
                    if (!empty($vnd)) : ?>
                        <label><?= $smg ?></label>
                    <?php endif ?>
                    <?php
                    if (!empty($usd)) : ?>
                     <label><?= $smg ?></label>
                    <?php endif ?>
                    <br />
                    

                    <label>Kết quả:</label>
                    <?php
                    if (!empty($vnd)) : ?>
                        <label><?= $vnd . "VND" ?></label><br>
                    <?php endif ?>
                    <?php
                    if (!empty($usd)) : ?>
                        <label><?= "$" . $usd ?></label><br>
                    <?php endif ?>
                </div>
            </form>
        </fieldset>
    </div>

</body>

</html>