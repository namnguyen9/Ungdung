<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>#content {
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
}</style>
</head>
<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <form action="result_lai.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="0" /><br />

                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="0" /><br />

                <label>Number of Years:</label>
                <input type="text" name="years" value="0" />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>
        </form>
    </div>
  
</body>

</html>