<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Ejercicio3</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

  <main>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-4">
          <form class="mt-5" action="" method="POST">
            <h4 class="text-center"> TIENDA SPRING STEP </h4>
            <div class="row">
              <div class="col">

                <input type="number" class="form-control" placeholder="CANTIDAD" name="cant_zapatos">
              </div>
              <div class="col">
                <input type="number" class="form-control" placeholder="TOTAL" name="precio_unitario">
              </div>

              <button type="submit" class="btn btn-primary mt-5" name="calcularDescuento">Submit</button>
          </form>
          <h4>

            <?php if (isset($_POST["calcularDescuento"])) {
              $cant_zapatos = $_POST["cant_zapatos"];
              $valorUnitario = $_POST["precio_unitario"];
              $valorPagar = $valorUnitario * $cant_zapatos;
              

              switch (true) {
                case $cant_zapatos == 3:
                  $descuento = $valorPagar * 0.10;
                  echo ( " Tienes un descuento de:  " . $descuento );
                  break;

                case $cant_zapatos > 3 && $cant_zapatos < 8:
                  $descuento = $valorPagar * 0.20;
                  echo ( " Tienes un descuento de:  " . $descuento );
                  break;

                case $cant_zapatos > 8:
                  $descuento = $valorPagar * 0.50;
                  echo ( " Tienes un descuento de:  " . $descuento );
                  break;

                default:
                  echo "Lo siento, no tienes derecho a descuento ";

                  
              }
            }
            ?>

          </h4>


        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>