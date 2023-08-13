<!-- parte inicial del documento-->
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->  
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/styles.css" rel="stylesheet">       
        <!-- FONT AWESOME -->
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" 
        crossorigin="anonymous">

        <style>
        .encabezado-contenido{
            text-align: left;
            padding: 15px;
            background-color: LightCyan;
        }

        .vin{
            display: inline-block;
            padding: 11px 35px;
            background-color: #CE967B;
            color: #F9FAFC;
            text-transform: uppercase;
        }

        .vin:hover{
            background-color: #EBAD8D;
        }
        .Producto{
            padding: 100px 0;
            background-color: #E1E2E6;
            position: relative;
        }

        .Producto-contenido{
            text-align: center;
        }
        .Producto-contenido h2{
            font-size: 55px;
            line-height: 70px;
            columns: #323337;
            text-transform: uppercase;
            padding: 0 250px;
            margin-bottom: 15px;
        }

        .texto-p{
            font-size: 22px;
            color: #414247;
            padding: 0 250px;
            margin-bottom: 25px;
        }

        .Producto-grupo{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .Producto-1{
            padding: 0 25px;
        }
        .Producto-1 img{
            width: 300px;
        }
        .disenoimg{
            right: 0; 
            padding: 10px 20px 45px 0;
            border-radius: 150px;
            margin-right: 68px;
        }
        .diseno-img{
            position:absolute;
            top: 0;
            right: 0;
        }

        .Producto-1 h3{
            color: #323337;
            font-size: 22px;
            margin-bottom: 18px;
        }
        .Producto-1 p{
            font-size: 16px;
            color: #000000;
            padding: 0 50px;
            margin-bottom: 10px;
        }

        .productos{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),                  
            url("img/images2.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 100px 0;
        }

        .productos-contenido{
            text-align: center;
        }

        .productos-contenido h2{
            font-size: 55px;
            line-height: 70px;
            color: #F9FAFC;
            text-transform: uppercase;
            margin-bottom: 50px;
        }
        .productos-contenido p{
            font-size: 16px;
            color: #c5c5c5;
            margin-bottom: 50px;
            padding: 0 100px;
        }

        .productos-grupo{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }

        .producto-1{
            padding: 0 100px;
        }

        .producto-1 img{
            width: 120px;
            margin-bottom: 15px;
        }
        .producto-1 h3{
            color: #EACCB3;
            font-size: 18px;
        }

            .fondo {
                background-image: url('assets/images/images2.jpg');
                background-size:cover;
            }
            
        </style>
        <title>Diseños Personalizados</title>
    </head> 

    <body>
        <nav class="barraNavegacion navbar navbar-expand-md navbar-dark fixed-top">
            <a class="navbar-brand" href="index.php">Diseños Personalizados</a>
            <ul class="navbar-nav mr-auto">
                <!--crear enlaces segùn perfil de usuario-->
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?c=Productos&f=index">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?c=Servicios&f=index">Servicios</a></li>


                
                <?php if (empty($_SESSION[ID_ROLE]) || $_SESSION[ID_ROLE] == '1'){?>
                    <li class="nav-item"><a class="nav-link" href="index.php?c=Clientes&f=index">Clientes</a></li>
                <?php } else if (empty($_SESSION[ID_ROLE]) || $_SESSION[ID_ROLE] == '2'){?>   
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php?c=Info">Quienes somos</a></li>
                <?php } else{?>   
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php?c=Info">Quienes somos</a></li>
                <?php }?>
                      


                    

            </ul>  
            <ul class="navbar-nav ml-auto">
                <li class="nav-item my-auto"><span style="color:white"><?php 
                if (isset($_SESSION[NAME_USER])) {
                    echo $_SESSION['name'];
                }else{
                    echo 'Usuario';
                }?> </span></li>
                <li class="nav-item"><a class="nav-link" href="index.php?c=index&f=index&p=login">Login</a></li>

            </ul>
            <?php
            if(empty($_SESSION['role'])){
                echo '<a class="btn btn-outline-info" href="index.php?c=auth&f=register">Registrate</a>';
            }
            if (isset($_SESSION['name']) && isset($_SESSION['role'])) {
                echo '<a class="btn btn-outline-danger" href="index.php?c=auth&f=logout">Cerrar sesión</a>';
            }
            ?>
        </nav>
        <div class="fondo">
        <h1 class="jumbotron text-center titNivel1">
            <i class="fab fa-shopify"></i>
            Diseños Personalizados </h1>
    </div>

        <?php
        if (!isset($_SESSION)) {
            session_start();
        };
        if (!empty($_SESSION['mensaje'])) {
            ?>
            <div class="mt-2 alert alert-<?php echo $_SESSION['color']; ?>
             alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['mensaje']; ?>  
            </div>
            <?php
            unset($_SESSION['mensaje']);
            unset($_SESSION['color']);
        }//end if 
        ?>
        