<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Entradas Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
     <div class="tarjetitas">
            <?php
                $meses = array("01" => "Enero",
                    "02" => "Febrero",
                    "03" => "Marzo",
                    "04" => "Abril",
                    "05" => "Mayo",
                    "06" => "Junio",
                    "07" => "Julio",
                    "08" => "Agosto",
                    "09" => "Septiembre",
                    "10" => "Octubre",
                    "11" => "Noviebre",
                    "12" => "Diciembre",
                );
                foreach ($entradas as $entrada) {
                    // Coge la fecha como string chulísimo
                    $textoFecha;
                    if ($entrada->fecha != "" || $entrada->fecha != null) {
                        $fecha = DateTime::createFromFormat("Y-m-d", $entrada->fecha);
                        $nombreMes = $meses[$fecha->format("m")];
                        $textoFecha = $fecha->format("d") . " de " . $nombreMes . " de " . $fecha->format("Y");
                    } else {
                        $textoFecha = "Abono completo";
                    }

              


                    

                    ?>
                <div class="box">
                    <div class="prueba">
                        <section>
                            <widget type="entrada" class="--flex-column">
                                <div class="top --flex-column">
                                    <div class="bandname -bold"><?php echo $entrada->nombre; ?></div>
                                    <div class="tourname"><?php echo $entrada->categoria; ?></div>
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt="" />
                                    <div class="deetz --flex-row-j!sb">
                                        <div class="event --flex-column">
                                            <div class="date"><?php echo ($textoFecha); ?></div>
                                            <div class="location -bold"><?php echo $entrada->sitio . ", " . $entrada->provincia ?></div>
                                        </div>
                                        <div class="price --flex-column">
                                            <div class="label">Precio</div>
                                            <div class="cost -bold"><?php echo $entrada->precio . "€" ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rip"></div>
                                <div class="bottom --flex-row-j!sb">
                                    
                                </div>
                            </widget>
                        </section>
                    </div>
                </div>
                <?php
                }
                ?>
    </div>
</body>
</html>