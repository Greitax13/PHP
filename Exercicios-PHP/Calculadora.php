<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Calculadora</h2>
        <form method="post">
            <input type="number" name="n1" placeholder="Primeiro número">
            <input type="number" name="n2" placeholder="Segundo número">
            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <br>
            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">

            <?php
            function calcular($n1, $n2, $operador)
            {
                if ($operador == "+")
                    return $n1 + $n2;
                elseif ($operador == "-")
                    return $n1 - $n2;
                elseif ($operador == "*")
                    return $n1 * $n2;
                elseif ($operador == "/")
                    return $n1 / $n2;
            }
            if (isset($_POST["n1"])) {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $operador = $_POST["operador"];
                echo "Resultado: " . calcular($n1, $n2, $operador);
            }
            ?>

        </div>
    </div>
</body>
</html>