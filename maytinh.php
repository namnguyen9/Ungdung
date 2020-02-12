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
    </style>
</head>

<body>
  
    <div id="content">
    <h1>Simple Calculator</h1>
        <fieldset>
            <legend>Calculator</legend>
            <form method="post" action="index.php">
                <div id="data">
                    <label>First operand:</label>
                    <input type="text" name="description" /><br />
                    <label>Operator:</label>
                    <select name="name">
                        <option value="plus">plus</option>
                        <option value="minus">minus</option>
                        <option value="multiply">multiply</option>
                        <option value="divide">divide</option>
                    </select>
                    <br />
                    <label>Second operand:</label>
                    <input type="text" name="discount_percent" /><br />
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate" />
                </div>
            </form>
        </fieldset>
    </div>


</body>

</html>