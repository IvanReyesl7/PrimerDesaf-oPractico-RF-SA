<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div class="contenedor">

        <div class="longitud">

            <h1>Conversor de Longitudes</h1>

            

                <form method="POST">

                    <label for="cantidad">Ingrese la cantidad:</label>

                    <input type="number" class="cantidad" placeholder="Cantidad">

            

                    <select name="Longitud" id="longitud">

                        <option selected>Selecciona la Longitud.</option>
                        <option value="hay miguel">Metro</option>
                        <option value="2">Pulgadas</option>
                        <option value="3">Yardas</option>
                        <option value="4">Pies</option>

                    </select><br>

                    <input type="submit" value="Enviar" name="Enviar"><br>
                    
                </form>
            
            <?php

                if(isset($_POST['Longitud'])){
                    $valor = $_POST['Longitud'];
                    ?>

                        <h1><?php echo $valor ?></h1>

                    <?php
                }
            ?>
            
        </div>

    </div>


    
</body>
</html>