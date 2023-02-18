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
    <title>Gasto de combustible</title>
</head>
<body>
    <div class="encabezado">

        <h1>Consumo de gasolina a partir de la distancia</h1>

    </div>

        <div class="formulario">

            <form method="post">
                

                <label for="">Vehiculo de entrega:</label>

                    <select name="Vehiculo" class="vehiculo" id="vehiculo">

                        <option selected value="">Seleccione el Vehiculo.</option>
                        <option value="1">Camion 5 Ton - - - 12 Km/gal</option>
                        <option value="2">Camion 3 Ton - - - 16 Km/gal</option>
                        <option value="3">PickUp - - - 22 Km/gal</option>
                        <option value="4">Panel - - - 28 Km/gal</option>
                        <option value="5">Moto - - - 42 Km/gal</option>

                    </select><br>

                    <label for="">Ingrese la distancia a recorrer en Km:</label>

                    <input name="Distancia" type="number" class="vehiculo" placeholder="Distancia">

                
                    <input class="submit" type="submit" value="Enviar" name="Enviar"><br>


                    <div class="resultado">

                        <?php 
                        
                        if(isset($_POST['Vehiculo']) && strlen($_POST['Distancia'])){

                            $vehiculo = $_POST['Vehiculo'];
                            $distancia = $_POST['Distancia'];
                            
                            if($vehiculo == "1"){

                                $galones = $distancia / 12;
                                $galoresRed = round($galones,2);

                                ?><p>El Camion de 5 Ton entregara a <?php echo $distancia . "Km" ?> de distancia consumiendo <?php echo $galoresRed . "Gal." ?> </p> <?php

                            }elseif( $vehiculo == "2"){

                                $galones = $distancia / 16;
                                $galoresRed = round($galones,2);
                                ?> <p>El Camion de 3 Ton entregara a <?php echo $distancia . "Km" ?> de distancia consumiendo <?php echo $galoresRed . "Gal." ?> </p> <?php
                            }
                            elseif( $vehiculo == "3"){

                                $galones = $distancia / 22;
                                $galoresRed = round($galones,2);
                                ?> <p>El PickUp entregara a <?php echo $distancia . "Km" ?> de distancia consumiendo <?php echo $galoresRed . "Gal." ?> </p> <?php
                            }
                            elseif( $vehiculo == "4"){

                                $galones = $distancia / 28;
                                $galoresRed = round($galones,2);
                                ?> <p>El panel entregara a <?php echo $distancia . "Km" ?> de distancia consumiendo <?php echo $galoresRed . "Gal." ?> </p> <?php
                            }
                            elseif( $vehiculo == "5"){

                                $galones = $distancia / 42;
                                $galoresRed = round($galones,2);
                                ?> <p>La moto entregara a <?php echo $distancia . "Km" ?> de distancia consumiendo <?php echo $galoresRed . "Gal." ?> </p> <?php
                            };
                        };
                        
                        ?>

                    </div>
            </form>

        </div>
</body>
</html>