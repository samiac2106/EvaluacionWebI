<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio2</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP.VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <form class="mt-5" action="" method="POST">
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
            $pesomin=round($pesomin,1);
            $pesomax = $estatura * $estatura * 24.9;
            $pesomax=round ($pesomax,1);
            

            echo ("<br>");
            if ($imc < 18.5) {
              echo ( " su IMC es de " . $imc . ", y tienes bajo peso.");
              echo("<br>");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
              
            } else if ($imc <= 24.9) {
              echo ( " su IMC ES DE " . $imc . " y tienes un peso normal. ");
            } else if ($imc <= 29.9) {
              echo (" su IMC ES DE " . $imc . " y tienes sobrepeso. ");
              echo("<br>");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
              
            } else if ($imc <= 34.9) {
              echo ( " su IMC  ES DE " . $imc . " y tienes obesidad I. ");
              echo("<br>");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
              
            } else if ($imc <= 39.9) {
              echo (", su IMC ES DE " . $imc . " y tienes obesidad II. ");
              echo("<br>");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
       
            } else if ($imc <= 49.9) {
              echo (", su IMC ES DE " . $imc . " y tienes obesidad III. ");
              echo("<br>");
              echo ("Tu peso ideal debe ser entre " . $pesomin . " y " . $pesomax);
             
            } else {
              echo ( ", su IMC ES DE " . $imc . " y tienes obesidad IV. ");
              echo("<br>");
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