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
            $result = "Por favor ingrese un signo de +, -,  *, /. ";
    }
}

?>

<?php
$costodolares = 23.5;
if ($costodolares < 25.5 && $costodolares > 20) {
    echo ("no tiene descuento");
} else if ($costodolares >= 25.5) {
    echo ("tiene descuento\n\n");
    echo ("<br");
    echo ("<br");
    echo ("<br");
}


?>

<?php
$edades = array(1, 2, 3, 4, 5);
echo ("<br");
echo ("<br");
echo ("<br");
print_r($edades);


?>

<?php
$nombres = array('nombre1' => "juan", 'nombre2' => "pedro", 'nombre3' => "claudia");
foreach ($nombres as $claves => $valores) {
    echo ($claves) . "<br>";
}


echo ("<br");
echo ("<br");
echo ("<br");
print_r($edades);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Taller WEB i punto 1 </title>
</head>

<body>
    <form action="" method="POST">
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
            <option value="+"> +
            <option>
            <option value="-"> -
            <option>
            <option value="*"> *
            <option>
            <option value="/"> /
            <option>
        </select>

        <div> <?php if (!empty($_POST)) {
                    echo $result;
                }  ?> </div>
        <input type="submit" value="calcular">

    </form>
</body>

</html>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESIÓN</title>
    <link rel="shortcut icon" href="img/cedimed-icono.png" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <style>

    </style>
</head>

<body>
    <SEction id="container">

        <form id="inicio" action="" method="post">
            <h3>Inicio de Sesión del Área de Citas</h3>
            <img src="img/cedimed.png" alt="Login_cedimed">

            <div>
                <span></span>
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese Usuario" autocomplete="off">
            </div>
            <div>
                <span></span>
                <input type="password" name="clave" id="clave" placeholder="Ingrese Contraseña">
            </div>
            <center>
                <p class="alert"> <?php echo isset($alert) ? $alert : ''; ?></p>
            </center>
            <div>

                <input type="submit" value="INICIAR SESIÓN" id="enviar">
            </div>

        </form>

    </SEction>

    <!--  <script type="text/javascript">
	var form = document.getElementById("inicio");
	form.onsubmit = function(e){
		alert("Hola!!");
		e.preventDefault();
	}
</script> -->
</body>

</html>