<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label >Informe sua idade</label>
        <input type="text" name="idade">
        <input type="submit" value="Verificar">
    </form>

    <?php

        if (isset($_GET["idade"])) //se estou utilizando uma função booleana não preciso colocar teste, ele vai buscar por condição verdadeira
        {

            if ($_GET["idade"] >= 18)
            {
                echo "Liberado.";
            }
            else
            {
                echo "Solicitar autorização de um responsável.";
            }

        }

       
    ?>
</body>
</html>