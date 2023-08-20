<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
    </head>
    <body>
        <h1>Test/Pruebas</h1>
        <?php
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.mercadolibre.com/users/226384143/");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $res = curl_exec($ch);
            $res1 = json_decode($res,true);
            curl_close($ch);
            //Pintamos el resultado por pantalla
            echo $res1['id'];
        ?>
    </body>
</html>