<?php

if (isset($_POST['length'])) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Gerador de Senha</title>
</head>

<body>

    <h4>Generated Password</h4>
    <input type="text" readonly value="novaSENHA">
    <h4>Generated Password</h4>
    <form method="POST" action="">
        <p>
            <label for="">Password Length</label>
            <input type="number" min="8" required value="16" name="length">
        </p>

        <p>
            <label for="">Include Lowercase</label>
            <input type="checkbox" value="1" checked name="Lowercase">
        </p>

        <p>
            <label for="">Include Uppercase</label>
            <input type="checkbox" value="1" checked name="uppercase">
        </p>

        <p>
            <label for="">Include Symbols</label>
            <input type="checkbox" value="1" checked name="symbols">
        </p>

        <p>
            <label for="">Include Numbers</label>
            <input type="checkbox" value="1" checked name="numbers">
        </p>


        <p>
            <button>Generate!</button>
        </p>
    </form>


</body>

</html>