<div class="container">
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if($num1 >= $num2)
        {
            echo "Numero 1 = ".$num1." Es Mayor Que Numero 2 = ".$num2;
        }
        else
        {
            echo "Numero 2 = ".$num2." Es Mayor Que Numero 1 = ".$num1;
        }
    ?>
</div>