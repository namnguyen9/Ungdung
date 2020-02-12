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

        #button input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Amount = $_POST["investment"];
        $Rate =  $_POST["rate"];
        $Years =  $_POST["years"];
        if ($Amount > 0 && $Rate > 0) {
            function Sumyear($Amount, $Rate, $Years)
            {

                for ($i = 1; $i <= $Years; $i++) {
                    $Amount += ($Amount * ($Rate / 100));
                }
                return $Amount;
            }
        } else {
            echo "số Năm hoặc số Tiền không hợp lệ";
        }
        $result = Sumyear($Amount, $Rate, $Years);
       
    }
    ?>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <form action="lai.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <label><?= "$" . $Amount ?></label><br />

                <label>Yearly Interest Rate:</label>
                <label><?= $Rate . "%" ?></label><br />

                <label>Number of Years:</label>
                <label><?= $Years ?></label><br />

                <label>Future Value:</label>
                <label><?= $result ?></label><br />
            </div>
        </form>
    </div>

</body>

</html>