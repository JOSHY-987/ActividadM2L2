<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ejecicio 3</title>
    <?php require_once "Menu.php"?>
</head>

<body>

    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 p-5 bg-white shadow-lg rounded">
                <form method="POST">
                    <h2>Ejercicio 3</h2>

                    <hr>
                    <p>Se pide programar un algoritmo, que dado un texto
                        introducido por el usuario, muestre por pantalla
                        un mensaje.</p>
                    <p><strong>Nota: </strong>Texto a introducir Hola o Adios.</p>

                    <div class="form-group">
                        <label for="texto">Texto Aqui</label>
                        <input id="texto" class="form-control" type="text" name="texto">
                    </div>

                    <br>

                    <div class="row justify-content-center">
                        <button class="btn btn-primary" id="mostrarej3" type="button">Mostrar Resultado</button>
                    </div>

                    <br>
                    <div id="Msg3"></div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="AJAX/Funciones.js"></script>
</body>

</html>