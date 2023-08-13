<?php require_once HEADER; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name ="autor" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/Grupo-8.png">
    <title>Nosotros</title>
    <style>

        .contenedor{
            max-width: 1200px;
            margin: 0 auto;
        }
        .nosotros{
            display: flex;
        }
        .nosotros-1{
            width: 50%;
            padding: 100px 250px 100px 100px;
            background-color: #E1E2E6;
        }
        .nosotros-2{
            background-image: url("assets/images/nosotros.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 50%;
        }

        .nosotros-3{
            background-image: url("assets/images/nosotros2.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 50%;
        }
        .nosotros-4{
            background-image: url("assets/images/ARTICULOS-PERSONALIZADOS.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 50%;
        }

        h2{
            font-size: 55px;
            line-height: 70px;
            color: #CE967B;
            text-transform: uppercase;
            margin-bottom: 28px;
            }

        p{
            font-size: 16px;
            color: #414247;
            margin: 25px 0 45px 0;
        }
        
       
    </style>
</head>
<body>
<section class="nosotros">
        <div class="nosotros-1">
            
            <h2>Sobre nosotros...</h2>
            <p>
                Nos apasiona crear productos personalizados únicos y especiales para ti. Somos un equipo de expertos en diseño y fabricación que se dedica a convertir tus ideas en realidad.
                Nuestra misión es brindarte la oportunidad de expresar tu individualidad a través de productos personalizados. 
            </p>
        </div>
        <div class="nosotros-2"></div>
    </section>

    <section class="nosotros">
        <div class="nosotros-3"></div>
        <div class="nosotros-1">
            <h2>Podras encontrar...</h2>
            <p>
                Nos enorgullece ofrecerte una amplia gama de opciones de personalización. Desde grabados y bordados hasta impresiones en 3D y técnicas de sublimación, utilizamos las últimas tecnologías y materiales de alta calidad para garantizar que cada producto sea único y duradero.
            </p>
        </div>
    </section>

    <section class="nosotros">
        <div class="nosotros-1">
            
            <h2>Además...</h2>
            <p>
                La creatividad y la calidad son nuestra prioridad. Trabajamos con pasión y dedicación para ofrecerte productos personalizados que reflejen tu estilo, personalidad y emociones. Creemos que los detalles marcan la diferencia, y nos comprometemos a brindarte productos excepcionales que te hagan sentir especial.
            </p>
        </div>
        <div class="nosotros-4"></div>
    </section>
    </body>
</html>
    


<?php require_once FOOTER; ?>