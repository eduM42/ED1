<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <label >Número: <br>
            <input type="number" placeholder="Número qualquer" name="txtnumero">
        </label>
        <p><input type="submit" name="Enviar"></p>
        <p><input type="reset" name="Limpar"></p>
    </form>

<?php
    $numero = $_GET['txtnumero'];

    echo "O valor é: ".pn($numero)."<br>";

    function pn($valor){
        if($valor > 0){
            return 'P';
        }
        else{
            return 'N';
        }
    }

?>
</body>
</html>

