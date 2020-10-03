<?php if (isset($_POST['enviar'])) {
    $noches = $_POST['noches'];
    $ciudad = $_POST['ciudad'];
    $ch = coste_hotel($noches);
    $ca = coste_avion($ciudad);
    $CC = coste_alquiler_coche($noches);
    $resultado = $ch + $ca + $CC;

    echo $resultado;
}
function coste_hotel($n)
{
    $coste_hotel = $n * 140;
    return $coste_hotel;
}

function coste_avion($C)
{
    $coste_viaje = 0;
    if ($C == "oviedo") {
        $coste_viaje = 183;
        echo ( " Tienes un descuento de:  " . $coste_viaje  );
    } else if ($C = "tokyo") {
        $coste_viaje = 220;
        echo ( " Tienes un descuento de:  " . $coste_viaje  );
    } else if ($C = "madrid") {
        $coste_viaje = 222;
        echo ( " Tienes un descuento de:  " . $coste_viaje  );
    } else {
        $coste_viaje = 475;
        echo ( " Tienes un descuento de:  " . $coste_viaje  );
    }

    return $coste_viaje;
}

function coste_alquiler_coche($n)
{
    $coste = 0;
    $coste = $n * 40;
    if ($n > 7) {
        $coste = $coste - 50;
    }
    if ($n > 3) {
        $coste = $coste - 20;
    }
    return $coste;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermercado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SupermercadoJ1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>


                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <form class="mt-5" action="" method="POST">
                        <h4 class="text-center"> ORDEN DE COMPRA </h4>
                        <div class="row">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="NOCHES" name="noches">
                            </div>
                            <div class="col">
                                <input type="texto" class="form-control" placeholder="CIUDAD" name="ciudad">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-5" name="enviar">Submit</button>
                    </form>
                

                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>

 
<?php 

if (isset($_REQUEST['enviar'])){
echo "enviar";
}
?>
 <!DOCTYPE html> 
 <html lang="en">
     <head>
<meta charset="UTF-8">
<title>Document</title> 
</head> 
<body> 
    <form action="#">
<label for="noches">Número de noches:</label> <input type="text"> 
<input type="submit" name="enviar">

</form> 
</body> 
 </html> mi>
