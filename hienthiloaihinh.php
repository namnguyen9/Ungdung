<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="ve.php" method="POST">
        <select name="name">
            <option value="rectangle">Print the rectangle</option>
            <option value="botton-left">Print the square triangle(botton-left)</option>
            <option value="botton-right">Print the square triangle(botton-right)</option>
            <option value="top-left">Print the square triangle(top-left)</option>
            <option value="top-right">Print the square triangle(top-right)</option>
            <option value="isosceles">Print isosceles triangle</option>
        </select>
        <div id="button">
            <label>&nbsp;</label>
            <input type="submit" value="Clear">
        </div>
    </form>

</body>

</html>