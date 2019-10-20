<?php
$GLOBALS['sum'] = "";
session_start();
$_SESSION['first_number'] = $_SESSION['first_number'] ? $_SESSION['first_number'] : "";
$_SESSION['second_number'] = $_SESSION['second_number'] ? $_SESSION['second_number'] : "";

function set_session($number1, $number2)
{
    $_SESSION['first_number'] = $number1;
    $_SESSION['second_number'] = $number2;
}

if (isset($_GET['add'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $GLOBALS['sum'] = $number1 + $number2;
    set_session($number1, $number2);
} else if (isset($_GET['sub'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $GLOBALS['sum'] = $number1 - $number2;
    set_session($number1, $number2);
} else if (isset($_GET['mul'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $GLOBALS['sum'] = $number1 * $number2;
    set_session($number1, $number2);
} else if (isset($_GET['div'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $GLOBALS['sum'] = $number1 / $number2;
    set_session($number1, $number2);
} else if (isset($_GET['clear'])) {
    $_SESSION['first_number'] = "";
    $_SESSION['second_number'] = "";
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Playground</title>
</head>
<body>
<div class="container mt-5">
    <form class="form-group" method="get">
        <fieldset>
            <legend>Calculator</legend>
            <label>Enter First Number:</label>
            <input
                    value="<?php echo $_SESSION['first_number']; ?>"
                    class="form-control" type="number"
                    name="number1"/><br><br>
            <label>Enter Second Number:</label>
            <input
                    value="<?php echo $_SESSION['second_number']; ?>"
                    class="form-control"
                    type="number"
                    name="number2"
            />
            <br><br>
        </fieldset>

        <input class="btn btn-dark" type="submit" name="add" value="+">
        <input class="btn btn-dark" type="submit" name="sub" value="-">
        <input class="btn btn-dark" type="submit" name="mul" value="*">
        <input class="btn btn-dark" type="submit" name="div" value="/">

        <input class="btn btn-danger" type="submit" name="clear" value="C">
    </form>

    <h3>Result : <?php echo $GLOBALS['sum']; ?></h3>
</div>
</body>
</html>