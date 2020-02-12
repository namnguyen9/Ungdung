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
            padding: 0px 20px 20px;
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
            <form method="post" action="doi.php">
                <div id="data">
                    <label>Nhập số tiền</label>
                    <input type="number" min="1" name="sotien" pattern="[number]" /><br />
                    <label>Chuyển đổi tiền tệ</label>
                    <select name="name">
                        <option value="usd">USD -> VNĐ</option>
                        <option value="vnd">VNĐ -> USD</option>
                    </select>
                    <br />
                    <label>Kết quả</label>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Chuyển" />
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>