<!Doctype html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<?php

$first_input = $_POST['FirstNumber'];
$second_input = $_POST['SecondNumber'];

if (isset($_POST['plus'])) {
    $result = $first_input + $second_input;
} elseif (isset($_POST['minus'])) {
    $result = $first_input - $second_input;
} elseif (isset($_POST['times'])) {
    $result = $first_input * $second_input;
}  elseif (isset($_POST['devided'])) {
    $result = $first_input / $second_input;
}

?>

    <form method="POST" action="Calculator.php">
        <table>
            <tr>
                <td>
                    <input type="text" name="FirstNumber" maxlenght="4" placeholder="Input first number">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="SecondNumber" maxlenght="4" placeholder="Input first number">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="plus" value="+">
                    <input type="submit" name="minus" value="-">
                    <input type="submit" name="times" value="*">
                    <input type="submit" name="devided" value="/">
                </td>
            </tr>
            <tr>
                <td>
                    <?php if (isset($_POST['plus'])) { ?>
                        <input type="text" value="<?php echo $result ?>">
                    <?php } elseif (isset($_POST['minus'])) { ?>
                        <input type="text" value="<?php echo $result ?>">
                    <?php } elseif (isset($_POST['times'])) { ?> 
                        <input type="text" value="<?php echo $result ?>">
                    <?php } elseif (isset($_POST['debided'])) { ?> 
                        <input type="text" value="<?php echo $result ?>">
                    <?php } ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
