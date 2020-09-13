<?php
if (!empty ($_POST)) {
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$oper=$_POST['oper'];
$result='';

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Taller WEB i punto 1 </title>
</head>
<body>
    <form action= "" method = "POST">
    <div>  <label for= "number1"> Numero 1 </label>
            <input type="number" name= "number1" id="number1" value = "<?php if (!empty ($_POST)) {echo $number1;}  ?>">
    </div>

    <div>
    <label for= "number2"> Numero 2 </label>
    <input type="number" name= "number2" id="number2" value = "<?php if (!empty ($_POST)) {echo $number2;} ?>">
    </div>

    <label for= "oper"> Operador </label>
    <select name ="oper" id= "oper">
    <option selected disabled value= "<?php if (!empty($_POST)){echo $oper;} ?>"> 
    <?php if (!empty ($_POST)){echo $oper;} else {echo "Seleccione una Opción";} ?> </opcion>
    <option value = "+" > + <option>
    <option value = "-" > - <option>
    <option value = "*" > *  <option>
    <option value = "/" > / <option>
    </select>

    <div> <?php if (!empty ($_POST)) {echo $result;}  ?> </div>
    <input type="submit" value="calcular">
  
   </form>
</body>
</html>



