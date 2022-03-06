<div class="container">
    <?php
        $texto = $_POST['texto'];

        if($texto == "Hola" || $texto == "HOLA" || $texto == "hola")
        {
            echo "Muy Buenas Usuario";
        }
        elseif ($texto == "Adios" || $texto == "ADIOS" || $texto == "adios")
        {
            echo "Hasta Pronto";
        }
    ?>
</div>