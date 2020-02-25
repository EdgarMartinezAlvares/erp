
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<form action="" method="post">
    <h2>ingresar al sistema</h2>
	Usuario: <br>
	<input type="text" name="user"  ><br>
	Password: <br>
	<input type="password" name="pass" > <br> 
	<input type="submit" value="Ingresar" name="ingresar"><br> 
    </form>
<?php
if(isset($_POST["ingresar"])){
    require_once("php/usuario.php");
    $obj = new Usuario();
    $u = $_POST["user"];
    $p = $_POST["pass"];
    $resultado = $obj->comprobar($u,$p);
    if ($resultado==true){
        session_start();
        $_SESSION["usuario"] = $u;
        $_SESSION["autentication"] = true;
        header("Location:home.php");
    } else {
        echo "<h2>Usuario y/o Password incorectos</h2>";
    }
    
    }
?>
</body>
</html>
