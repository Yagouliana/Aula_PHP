<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verifique se você pode dirigir</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>
    <form method="post">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" min="0" required>
        <button type="submit">Verificar</button>
    </form>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] = "POST") {
            $idade = $_POST["idade"];
            if ($idade >= 18) {
                echo "Você pode dirigir.";
            } else {
                echo "Você não pode dirigir.";
            }
        }
        ?>
    </p>
</body>
</html>