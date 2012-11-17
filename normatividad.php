<?php
//CONEXION
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Normatividad</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <div class="header-container">
                
                <?php require_once("w-header.php") ?>

            </div>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">
                    
                        <div class="nw-nota cas">

                            <div class="titulo">
                                <h2>Normatividad</h2>
                            </div>

                            <form action="busqueda.php" method="GET">
                                <select>
                                    <option>Selecciona el año</option>
                                </select>
                                <select>
                                    <option>Selecciona el mes</option>
                                </select>
                                <input class="searchbutton" type="submit" value="Buscar" />
                            </form>

                            <div class="contenido">

                                <article>

                                    <a class="imagen-cas" href="documentos/RESOLUCION-DIRECTORAL-0471-2012.pdf"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Resolución Directoral 0471-2012</strong></p>
                                    </div>

                                </article>

                                <article>

                                    <a class="imagen-cas" href="documentos/RESOLUCION-DIRECTORAL-0476-2012.pdf"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Resolución Directoral 0476-2012</strong></p>
                                    </div>

                                </article>

                                <article>

                                    <a class="imagen-cas" href="documentos/RESOLUCION-DIRECTORAL-0477-2012.pdf"><img src="imagenes/cas.png"></a>

                                    <div>
                                        <p><strong>Resolución Directoral 0477-2012</strong></p>
                                    </div>

                                </article>

                            </div>

                        </div>

                    </section>

                    <?php require_once("w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

<?php require_once("w-popup.php") ?>

    </body>
</html>