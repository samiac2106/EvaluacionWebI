<?php
if (!empty($_POST)) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $oper = $_POST['oper'];
    $result = '';

    switch ($oper) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            $result = $number1 / $number2;
            break;
        default:
            $result = "Por favor ingrese una operacion ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OPERACIONES </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="mt-5" action="" method="POST">
                    <div> <label for="number1"> Numero 1 </label>
                        <input type="number" name="number1" id="number1" value="<?php if (!empty($_POST)) {
                                                                                    echo $number1;
                                                                                }  ?>">
                    </div>

                    <div>
                        <label for="number2"> Numero 2 </label>
                        <input type="number" name="number2" id="number2" value="<?php if (!empty($_POST)) {
                                                                                    echo $number2;
                                                                                } ?>">
                    </div>

                    <label for="oper"> Operador </label>
                    <select name="oper" id="oper">
                        <option selected disabled value="<?php if (!empty($_POST)) {
                                                                echo $oper;
                                                            } ?>">
                            <?php if (!empty($_POST)) {
                                echo $oper;
                            } else {
                                echo "Seleccione una Opción";
                            } ?> </opcion>
                        <option value="+"> Suma
                        <option>
                        <option value="-"> Resta
                        <option>
                        <option value="*"> Multiplicacion
                        <option>
                        <option value="/"> Division
                        <option>
                    </select>

                    <div> <?php if (!empty($_POST)) {
                                echo $result;
                            }  ?> </div>
                    <input type="submit" value="calcular">


                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>