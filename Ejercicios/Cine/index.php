<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala de cine</title>
</head>
<body>
    <form action="operaciones.php" method="POST">
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" required>
        <select name="salas" id="salas" required>
            <option value="sala1">Sala 1</option>
            <option value="sala2">Sala 2</option>
            <option value="sala3">Sala 3</option>
            <option value="sala4">Sala 4</option>
            <option value="sala5">Sala 5</option>
            <option value="sala6">Sala 6</option>
            <option value="sala7">Sala 7</option>
        </select>
        <input type="submit" value="Pagar">
    </form>

    <br>
    <table>
        <thead>
            <tr>
                <th>NO:</th>
                <th>Cantidad:</th>
                <th>Gerenro:</th>
            </tr>
            <tbody>
            <?php
                $response=json_decode(file_get_contents ('http://localhost/destructive/Ejercicios/Cine/api_cine.php'), true);
                if($response['statuscode']==200){
                    foreach($response['items'] as $item => $item_value){?>
                    <tr>
                        <td><?php echo$item;?></td>
                        <td><?php echo$item_value;?></td>
                        <td>$<?php echo($item_value*60);?></td>
                    </tr>
               <?php }
            }?>


                
            </tbody>
        </thead>
    </table>
</body>
</html>