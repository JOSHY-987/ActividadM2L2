<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ejecicio 2</title>
    <?php require_once "Menu.php"?>
</head>

<body>

    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                    <h2>Ejercicio 2</h2>

                    <hr>
                    <p>Debemos diseñar y programar un algoritmo que, para
                        la introduccion de un peso de un vehiculo, diga
                        si esta permitido o no dependiendo de un un segundo
                        valor $PesoPermitido. </p>
                    <p><strong>Nota: </strong>Peso Permitido es 10T.</p>

                    <div class="form-group">
                        <label for="peso">Peso Del Vehiculo</label>
                        <input id="peso" class="form-control" type="number" name="peso">
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <button class="btn btn-primary" id="mostrarej2" type="button">Mostrar Resultado</button>
                    </div>

                    <br>
                    <div id="Msg2"></div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="AJAX/Funciones.js"></script>
</body>

</html>