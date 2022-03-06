<div class="container">
    <?php
        $peso = $_POST['peso'];
        $PesoPermitido = 10;

        if($peso > $PesoPermitido)
        {
            echo "El vehiculo sobrepasa el limite de peso";
            echo "El peso maximo del vehiculo es: ".$peso."T (Siendo ".$PesoPermitido."T el peso maximo permitido)";
        }
        else
        {
            echo "El vehiculo puede pasar";
            echo "El peso maximo del vehiculo es: ".$peso."T (Siendo ".$PesoPermitido."T el peso maximo permitido)";
        }
    ?>
</div>