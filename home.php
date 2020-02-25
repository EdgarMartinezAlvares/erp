<?php
    session_start();
    if (!isset($_SESSION["autentication"])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<head>
    <title>ERP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <section>
    <nav>
        <h2>Bienvenido: <?php echo $_SESSION["usuario"];?></h2>
        <ul>
            <li>
                <a href=""><li>Inicio</li></a>
                <a href="?sec=usu"><li>Usuario</li></a>
                <a href="?sec=man"><li>Mantenimiento</li></a>
                <a href="?sec=mat"><li>Materia prima</li></a>
                <a href="?sec=mob"><li>Mobiliario</li></a>
                <a href="?sec=pag"><li>Pago</li></a>
                <a href="?sec=ped"><li>Pedido</li></a>
                <a href="?sec=prod"><li>Productos</li></a>
                <a href="?sec=prov"><li>Proveedor</li></a>
                <a href="?sec=proy"><li>Proyecto</li></a>
                <a href="?sec=rem"><li>Remplazo</li></a>
                <a href="?sec=ven"><li>Venta</li></a>
                <a href="?sec=cerrar"><li>Cerrar sesion</li></a>
            </li>
        </ul>
    </nav>
        <article>
            <?php
            if (isset($_GET["sec"])){
                $sec = $_GET["sec"];
                switch ($sec) {
                    case 'usu':
                        require_once("php/vistaUsuario.php");
                        break;
                    case 'man':
                        require_once("php/vistaMantenimiento.php");
                        break;
                    case 'mat':
                        require_once("php/vistaMateriaprima.php");
                        break;
                    case 'mob':
                        require_once("php/vistaMobiliario.php");
                        break;     
                    case 'pag':
                        require_once("php/vistaPago.php");
                        break;
                    case 'ped':
                        require_once("php/vistaPedido.php");
                        break;
                    case 'prod':
                        require_once("php/vistaProductos.php");
                        break;
                    case 'prov':
                        require_once("php/vistaProveedor.php");
                        break;  
                    case 'proy':
                        require_once("php/vistaProyecto.php");
                        break;
                    case 'rem':
                        require_once("php/vistaRemplazo.php");
                        break;
                    case 'ven':
                        require_once("php/vistaventa.php");
                        break;         
                    case 'cerrar':
                        session_destroy();
                        header("Location: index.php");
                        break;   
                }
            }
            ?>
        </article>
    </section>
</body>
</html>