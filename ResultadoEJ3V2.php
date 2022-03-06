<div class="container">
    <?php
        $texto2 = $_POST['texto2'];

        if($texto2 == "Hola" || $texto2 == "HOLA" || $texto2 == "hola")
        {
            echo "Muy Buenas Usuario";
        }
        elseif ($texto2 == "Adios" || $texto2 == "ADIOS" || $texto2 == "adios")
        {
            echo "Hasta Pronto";
        }
        else
        {
            echo "<img src='IMGTEST/Fallo.jpg' class='mx-auto d-block' border='0' width='150' height='150'>";
            echo "<p class='text-center'>No Pos Dinosaurio<br>Texto no es valido</p>";
        }
    ?>
</div>