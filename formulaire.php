<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="" method="POST">
        <label>entrez la devise en cfa</label> <br> <br>

        <input type="number" name="franc" placeholder="FCA" required> <br> <br>
        <input type="submit" value="convertir" name="conver"> <br> <br>
        <label> voici la valeur en euro</label> <br>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newValeur = $_POST['franc'] / 600;

            echo   ' <input type="number" name="euro" placeholder="Euro" value="' . $newValeur . '" <br> <br>
    </form>';
        }
        ?>



</body>

</html>