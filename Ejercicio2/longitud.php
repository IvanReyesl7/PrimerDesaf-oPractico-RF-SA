<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 
    <title>Conversor de medidas</title>
</head>
<body>


    <section>

    <div class="encabezado">

        <h1>Conversor De Longitudes</h1>

    </div>
    <div class="formulario">

        <form method="POST">

                    <label for="">Ingrese la cantidad:</label>

                    <input name="Cantidad" type="number" class="cantidad" placeholder="Cantidad">

                    <label for="">Longitud:</label>

                    <select name="Longitud" class="cantidad" id="longitud">

                        <option selected value="">Selecciona la Longitud.</option>
                        <option value="1">Metro</option>
                        <option value="2">Pulgadas</option>
                        <option value="3">Yardas</option>
                        <option value="4">Pies</option>

                    </select><br>

                    <input class="submit" type="submit" value="Enviar" name="Enviar"><br>

                    <div class="tabla">
                        
                    <?php

                            if(isset($_POST['Longitud']) && strlen($_POST['Cantidad'])){

                                $valor = $_POST['Cantidad'];
                                $longitud = $_POST['Longitud'];


                                echo "<table border=1>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Longitud</th>";
                                echo "<th>Cantidad</th>";
                                echo "</th>";
                                echo "</thead>";

                                
                                if( $longitud == "1"){
                                    
                                    echo "<tr>";
                                    echo "<td>Metros</td>";
                                    echo "<td>$valor</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pulgadas</td>";
                                    echo "<td>".$valor * 39.37."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Yardas</td>";
                                    echo "<td>".$valor * 1.094."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pies</td>";
                                    echo "<td>".$valor * 3.281."</td>";
                                    echo "</tr>";
                                }elseif($longitud == "2"){
                                    echo "<tr>";
                                    echo "<td>Metros</td>";
                                    echo "<td>".$valor * 39.37."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pulgadas</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Yardas</td>";
                                    echo "<td>".$valor/36 ."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pies</td>";
                                    echo "<td>".$valor/12 ."</td>";
                                    echo "</tr>";
                                }
                                elseif($longitud == "3"){
                                    echo "<tr>";
                                    echo "<td>Metros</td>";
                                    echo "<td>".$valor / 1.094 ."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pulgadas</td>";
                                    echo "<td>".$valor * 36 ."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Yardas</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pies</td>";
                                    echo "<td>".$valor * 3 ."</td>";
                                    echo "</tr>";
                                }
                                elseif($longitud == "4"){
                                    echo "<tr>";
                                    echo "<td>Metros</td>";
                                    echo "<td>".$valor / 3.28 ."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pulgadas</td>";
                                    echo "<td>".$valor * 12 ."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Yardas</td>";
                                    echo "<td>".$valor * 0.333."</td>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>Pies</td>";
                                    echo "<td>".$valor."</td>";
                                    echo "</tr>";
                                }

                                
                                echo "</table>";

                                
                            }
                    ?>

                    </div>
        </form>

    </div>

    </section>
    
            
    
            



    
</body>
</html>