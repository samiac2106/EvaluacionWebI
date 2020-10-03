<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP.VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
          <form class="mt-5" action="ejercicio2.php" method="POST">
            <h4 class="text-center"> CALCULAR EL IMC </h4>
            <div class="row">
              <div class="col">
                <input type="number" step=".01"  class="form-control" placeholder="PESO" name="peso">
              </div>
              <div class="col">
                <input type="number" step=".01" class="form-control" placeholder="ALTURA" name="estatura">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-5" name="calcular">Submit</button>
          </form>

          <?php if (isset($_POST["calcular"])) {
            $peso = $_POST["peso"];
            $estatura = $_POST["estatura"];
            $imc = $peso / ($estatura * $estatura);
            $imc = round($imc,1);
            $pesomin = $estatura * $estatura * 18.5;
            $pesomax = $estatura * $estatura * 24.9;
            $nombre = "nombre";

            echo ("<br>");

            if ($imc < 18.5) {
              echo ($nombre . ",  su IMC es de " . $imc . ", y tienes bajo peso.");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
            } else if ($imc <= 24.9) {
              echo ($nombre . ", su IMC ES DE " . $imc . " y tienes un peso normal. ");
            } else if ($imc <= 29.9) {
              echo ($nombre . ", su IMC ES DE " . $imc . " y tienes sobrepeso. ");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
            } else if ($imc <= 34.9) {
              echo ($nombre . ", su IMC  ES DE " . $imc . " y tienes obesidad I. ");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
            } else if ($imc <= 39.9) {
              echo ($nombre . ", su IMC ES DE " . $imc . " y tienes obesidad II. ");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
            } else if ($imc <= 49.9) {
              echo ($nombre . ", su IMC ES DE " . $imc . " y tienes obesidad III. ");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
            } else {
              echo ($nombre . ", su IMC ES DE " . $imc . " y tienes obesidad IV. ");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
            }
          }
          ?>


        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C.OGpamoFVy38MVBnE.IbbVYUew.OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU.6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV.rV" crossorigin="anonymous"></script>
</body>

</html>