<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postobon</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <form class="mt-5" action="" method="POST">
            <h4 class="text-center"> SALARIO </h4>
            <div class="row">
              <div class="col">
                <input type="number" class="form-control" placeholder="HORAS LABORADAS" name="horas_laboradas">
              </div>          
            </div>
            <button type="submit" class="btn btn-primary mt-5" name="botonEnvio">Submit</button>
          </form>
          <?php if (isset($_POST["botonEnvio"])) {
            $cantHoras = $_POST["horas_laboradas"];
            $horaSemana = $cantHoras - 40;
            $horaExtra= 25000;
            $salarioBas= 40*20000;
            $result = '';
        
          if ($cantHoras <= 40) {
            $result = $cantHoras * 20000;
            echo ("El total a pagar es de:   " . $result);
          } elseif ($cantHoras > 40) {
            $result = $horaSemana * 25000 + $salarioBas;
            echo ("El total a pagar es de:   " . $result);
          } 
        }
          ?>


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