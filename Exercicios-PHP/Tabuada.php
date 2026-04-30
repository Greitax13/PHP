<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Calcular Tabuada</h2>
        <form method="post">
            <input type="number" name="numero" placeholder="Digite um número">
            <br>
            <button type="submit">Calcular</button>
        </form>
        <div class="resultado">

            <?php
            if (isset($_POST["numero"])) {
                $numero = $_POST["numero"];
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "$numero x $i = $resultado <br>";
                }
            }
            ?>
            
        </div>
    </div>
</body>
</html>