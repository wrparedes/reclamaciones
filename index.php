<?php
/*CONEXION Y FUNCIONES*/
require_once("panel@hndm/conexion/conexion.php");
require_once("panel@hndm/conexion/funciones.php");
require_once("panel@hndm/conexion/funcion-paginacion.php");

/*VARIABLES DE SCRIPTS*/
$script_popup=true;
$script_slide_campana=true;
$script_tabs=true;
$script_slnot_prin=true;

/*-----------------------*/
/*EQUIPOS DE ULTIMA TECNOLOGIA*/
$rst_eq_tecno=mysql_query("SELECT * FROM DM_noticia WHERE categoria=4 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_eq_tecno=1;


/*PROEZAS MEDICAS*/
$rst_pro_medic=mysql_query("SELECT * FROM DM_noticia WHERE categoria=7 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_pro_medic=1;


/*CAPACITACION*/
$rst_capacit=mysql_query("SELECT * FROM DM_noticia WHERE categoria=3 ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_capacit=mysql_fetch_array($rst_capacit);
$capacit_id=$fila_capacit["id"];
$capacit_url=$fila_capacit["url"];
$capacit_titulo=substr($fila_capacit["titulo"],0,45);
$capacit_contenido=substr(soloDescripcion($fila_capacit["contenido"]),0,140);
$capacit_imagen=$fila_capacit["imagen"];
$capacit_imagen_carpeta=$fila_capacit["carpeta_imagen"];
$capacit_categoria=seleccionTabla(3, "id", "DM_noticia_categoria", $conexion);
$capacit_url_final=$capacit_categoria["url"]."/".$capacit_id."-".$capacit_url;


/*RECONOCIMIENTOS INSTITUCIONALES*/
$rst_recon_inst=mysql_query("SELECT * FROM DM_noticia WHERE categoria=8 ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_recon_inst=mysql_fetch_array($rst_recon_inst);
$recon_inst_id=$fila_recon_inst["id"];
$recon_inst_url=$fila_recon_instc["url"];
$recon_inst_titulo=substr($fila_recon_inst["titulo"],0,65);
$recon_inst_contenido=substr(soloDescripcion($fila_recon_inst["contenido"]),0,225);
$recon_inst_imagen=$fila_recon_inst["imagen"];
$recon_inst_imagen_carpeta=$fila_recon_inst["carpeta_imagen"];
$recon_inst_categoria=seleccionTabla(8, "id", "DM_noticia_categoria", $conexion);
$recon_inst_url_final=$recon_inst_categoria["url"]."/".$recon_inst_id."-".$recon_inst_url;


/*NOTICIAS*/
$rst_noticias=mysql_query("SELECT * FROM DM_noticia WHERE categoria=6 ORDER BY fecha_publicacion DESC LIMIT 2;", $conexion);
$cont_noticias=1;


/*ALIANZAS*/
$rst_alianzas=mysql_query("SELECT * FROM DM_noticia WHERE categoria=1 ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_alianzas=mysql_fetch_array($rst_alianzas);
$alianzas_id=$fila_alianzas["id"];
$alianzas_url=$fila_alianzas["url"];
$alianzas_titulo=substr($fila_alianzas["titulo"],0,39);
$alianzas_contenido=substr(soloDescripcion($fila_alianzas["contenido"]),0,130);
$alianzas_imagen=$fila_alianzas["imagen"];
$alianzas_imagen_carpeta=$fila_alianzas["carpeta_imagen"];
$alianzas_categoria=seleccionTabla(1, "id", "DM_noticia_categoria", $conexion);
$alianzas_url_final=$alianzas_categoria["url"]."/".$alianzas_id."-".$alianzas_url;

/*VIDEOS*/
$rst_videos=mysql_query("SELECT * FROM DM_videos ORDER BY fecha_publicacion DESC LIMIT 1;", $conexion);
$fila_videos=mysql_fetch_array($rst_videos);
$videos_id=$fila_videos["id"];
$videos_url=$fila_videos["url"];
$videos_titulo=$fila_videos["titulo"];
$videos_youtube=$fila_videos["video"];

/*CAMPA??AS*/
$rst_campanias=mysql_query("SELECT * FROM DM_campania ORDER BY fecha_publicacion DESC LIMIT 6;", $conexion);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hospital Nacional Dos de Mayo</title>
        <meta name="description" content="">

        <?php require_once("w-header-scripts.php") ?>

        <!-- SLIDER CAMPA??AS -->
        <link href="/libs/allinone_banner/allinone_thumbnailsBanner.css" rel="stylesheet" type="text/css">
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <script src="/libs/allinone_banner/jquery.ui.touch-punch.min.js"></script>
        <script src="/libs/allinone_banner/jquery.mousewheel.min.js"></script>
        <script src="/libs/allinone_banner/allinone_thumbnailsBanner.js"></script>
        <script src="/libs/allinone_banner/reflection.js" type="text/javascript"></script>
        <!--[if IE]><script src="/libs/allinone_banner/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
        <script>
        var jCampEsp=jQuery.noConflict();
        jCampEsp(document).ready(function(){
            jCampEsp('#nw-campania-esp .nws-contenido div').allinone_thumbnailsBanner({
                skin: 'cool',
                numberOfThumbsPerScreen:2,
                width: 350,
                height: 300,
                thumbsWrapperMarginTop:0
            });
        });
        </script>

        <!-- POPUP PAGINA PRINCIPAL-->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="/js/popup.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="interior">

            <?php require_once("w-header.php") ?>

            <div class="main-container">
                <div class="main wrapper clearfix">

                    <section id="news">

                        <section id="news-izq">

                            <div id="nwi-pest">

                                <div id="nwip-select">
                                    <ul class="nav">
                                        <li class="selected"><a href="#pest-select-1">Equipos de ??ltima Tecnolog??a</a></li>
                                        <li><a href="#pest-select-2">Proezas M??dicas</a></li>
                                    </ul>
                                </div>

                                <div class="nwips-container pest-content" id="pest-select-1">

                                    <?php while ($fila_eq_tecno=mysql_fetch_array($rst_eq_tecno)) { 
                                        $eq_tecno_id=$fila_eq_tecno["id"];
                                        $eq_tecno_url=$fila_eq_tecno["url"];
                                        $eq_tecno_titulo=substr($fila_eq_tecno["titulo"],0,60);
                                        $eq_tecno_contenido=substr(soloDescripcion($fila_eq_tecno["contenido"]),0,225);
                                        $eq_tecno_imagen=$fila_eq_tecno["imagen"];
                                        $eq_tecno_imagen_carpeta=$fila_eq_tecno["carpeta_imagen"];
                                        $eq_tecno_categoria=seleccionTabla(4, "id", "DM_noticia_categoria", $conexion);
                                        $eq_tecno_url_final=$eq_tecno_categoria["url"]."/".$eq_tecno_id."-".$eq_tecno_url;
                                    ?>

                                        <?php if($cont_eq_tecno==1){ ?>
                                        <article class="borde-bottom news-noticia">

                                            <h2><a href="<?php echo $eq_tecno_url_final; ?>"><?php echo $eq_tecno_titulo; ?></a></h2>
                                            <div class="slider-bxslider">
                                                <img width="370" height="220" alt="" title=" " src="/imagenes/upload/<?php echo $eq_tecno_imagen_carpeta."thumb/".$eq_tecno_imagen; ?>">
                                            </div>
                                            <p><?php echo $eq_tecno_contenido; ?></p>
                                            <a class="art-mas" href="<?php echo $eq_tecno_url_final; ?>">M??s...</a>

                                        </article>
                                        <?php } ?>

                                        <?php if($cont_eq_tecno==2){ ?>
                                            <article class="news-noticia">

                                                <h2><a href="<?php echo $eq_tecno_url_final; ?>"><?php echo $eq_tecno_titulo; ?></a></h2>
                                                <p><?php echo $eq_tecno_contenido; ?></p>
                                                <a class="art-mas" href="<?php echo $eq_tecno_url_final; ?>">M??s...</a>

                                            </article>
                                        <?php } ?>

                                    <?php $cont_eq_tecno++;} ?>

                                </div>

                                <div class="nwips-container pest-content" id="pest-select-2">

                                    <?php while ($fila_pro_medic=mysql_fetch_array($rst_pro_medic)) { 
                                        $pro_medic_id=$fila_pro_medic["id"];
                                        $pro_medic_url=$fila_pro_medic["url"];
                                        $pro_medic_titulo=substr($fila_pro_medic["titulo"],0,60);
                                        $pro_medic_contenido=substr(soloDescripcion($fila_pro_medic["contenido"]),0,225);
                                        $pro_medic_imagen=$fila_pro_medic["imagen"];
                                        $pro_medic_imagen_carpeta=$fila_pro_medic["carpeta_imagen"];
                                        $pro_medic_categoria=seleccionTabla(7, "id", "DM_noticia_categoria", $conexion);
                                        $pro_medic_url_final=$pro_medic_categoria["url"]."/".$pro_medic_id."-".$pro_medic_url;
                                    ?>

                                        <?php if($cont_pro_medic==1){ ?>
                                            <article class="borde-bottom news-noticia">

                                                <h2><a href="<?php echo $pro_medic_url_final; ?>"><?php echo $pro_medic_titulo; ?></a></h2>
                                                <div class="slider-bxslider">
                                                    <img width="370" height="220" alt="" title=" " src="/imagenes/upload/<?php echo $pro_medic_imagen_carpeta."thumb/".$pro_medic_imagen; ?>">
                                                </div>
                                                <p><?php echo $pro_medic_contenido; ?></p>
                                                <a class="art-mas" href="<?php echo $pro_medic_url_final; ?>">M??s...</a>

                                            </article>
                                        <?php } ?>

                                        <?php if($cont_pro_medic==2){ ?>
                                            <article class="news-noticia">

                                                <h2><a href="<?php echo $pro_medic_url_final; ?>"><?php echo $pro_medic_titulo; ?></a></h2>
                                                <p><?php echo $pro_medic_contenido; ?></p>
                                                <a class="art-mas" href="<?php echo $pro_medic_url_final; ?>">M??s...</a>

                                            </article>
                                        <?php } ?>

                                    <?php $cont_pro_medic++;} ?>

                                </div>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Capacitaci??n</h3>
                                </div>

                                <article class="nws-contenido">

                                    <img width="120" height="135" src="/imagenes/upload/<?php echo $capacit_imagen_carpeta."thumb/".$capacit_imagen; ?>">
                                    <div>
                                        <h2><a href="<?php echo $capacit_url_final; ?>"><?php echo $capacit_titulo; ?></a></h2>
                                        <p><?php echo $capacit_contenido; ?></p>
                                    </div>
                                    <a class="art-mas" href="<?php echo $capacit_url_final; ?>">M??s...</a>

                                </article>
                            </div>

                            <div id="nw-campania-esp">
                                <div class="nws-select">
                                    <h3>Campa??as Especiales</h3>
                                </div>

                                <div class="nws-contenido">

                                    <div style="display:none;">
                                        
                                        <ul class="allinone_carousel_list">

                                            <?php while($fila_campanias=mysql_fetch_array($rst_campanias)){
                                                $campania_id=$fila_campanias["id"];
                                                $campania_url=$fila_campanias["url"];
                                                $campania_titulo=$fila_campanias["titulo"];
                                                $campania_imagen=$fila_campanias["imagen"];
                                                $campania_imagen_portada=$fila_campanias["imagen_portada"];
                                                $campania_imagen_carpeta=$fila_campanias["carpeta_imagen"];
                                            ?>
                                            <li data-link="campanias/<?php echo $campania_id."/".$campania_url; ?>"
                                            data-bottom-thumb="/imagenes/upload/<?php echo $campania_imagen_carpeta."thumb200/".$campania_imagen; ?>">
                                                <img src="/imagenes/upload/<?php echo $campania_imagen_carpeta."".$campania_imagen_portada; ?>" alt="" />
                                            </li>
                                            <?php } ?>
                                            
                                        </ul>

                                    </div>

                                    <a class="" href="campanias">M??s...</a>

                                </div>

                            </div>

                        </section>

                        <section id="news-der">

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Reconocimientos Institucionales</h3>
                                </div>

                                <article class="news-noticia">

                                    <h2><a href="<?php echo $recon_inst_url_final; ?>"><?php echo $recon_inst_titulo; ?></a></h2>
                                    <p><?php echo $recon_inst_contenido; ?></p>
                                    <div class="slider-bxslider">
                                        <img width="370" height="130" alt="" title=" " src="imagenes/upload/<?php echo $recon_inst_imagen_carpeta."thumb/".$recon_inst_imagen; ?>">
                                    </div>
                                    <a class="art-mas" href="<?php echo $recon_inst_url_final; ?>">M??s...</a>

                                </article>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Noticias</h3>
                                </div>

                                <?php while ($fila_noticias=mysql_fetch_array($rst_noticias)) { 
                                        $noticias_id=$fila_noticias["id"];
                                        $noticias_url=$fila_noticias["url"];
                                        $noticias_titulo=substr($fila_noticias["titulo"],0,60);
                                        $noticias_contenido=substr(soloDescripcion($fila_noticias["contenido"]),0,225);
                                        $noticias_imagen=$fila_noticias["imagen"];
                                        $noticias_imagen_carpeta=$fila_noticias["carpeta_imagen"];
                                        $noticias_categoria=seleccionTabla(6, "id", "DM_noticia_categoria", $conexion);
                                        $noticias_url_final=$noticias_categoria["url"]."/".$noticias_id."-".$noticias_url;
                                    ?>

                                        <?php if($cont_noticias==1){ ?>
                                        <article class="borde-bottom news-noticia">

                                            <h2><a href="<?php echo $noticias_url_final; ?>"><?php echo $noticias_titulo; ?></a></h2>
                                            <div class="slider-bxslider">
                                                <img width="370" height="130" alt="" title=" " src="/imagenes/upload/<?php echo $noticias_imagen_carpeta."thumb/".$noticias_imagen; ?>">
                                            </div>
                                            <p><?php echo $noticias_contenido; ?></p>
                                            <a class="art-mas" href="<?php echo $noticias_url_final; ?>">M??s...</a>

                                        </article>
                                        <?php } ?>

                                        <?php if($cont_noticias==2){ ?>
                                            <article class="news-noticia">

                                                <h2><a href="<?php echo $noticias_url_final; ?>"><?php echo $noticias_titulo; ?></a></h2>
                                                <p><?php echo $noticias_contenido; ?></p>
                                                <a class="art-mas" href="<?php echo $noticias_url_final; ?>">M??s...</a>

                                            </article>
                                        <?php } ?>

                                    <?php $cont_noticias++;} ?>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Alianzas</h3>
                                </div>

                                <article class="nws-contenido">

                                    <div>
                                        <h2><a href="<?php echo $alianzas_url_final; ?>"><?php echo $alianzas_titulo; ?></a></h2>
                                        <p><?php echo $alianzas_contenido; ?></p>
                                        <a class="art-mas" href="<?php echo $alianzas_url_final; ?>">M??s...</a>
                                    </div>
                                    <img width="120" height="135" src="/imagenes/upload/<?php echo $alianzas_imagen_carpeta."thumb/".$alianzas_imagen; ?>">

                                </article>
                            </div>

                            <div class="nw-seccion">

                                <div class="nws-select">
                                    <h3>Videos</h3>
                                </div>

                                <article class="nws-contenido">

                                    <div style="width: 100%;">
                                        <h2>
                                            <a href="video/<?php echo $videos_id."/".$videos_url; ?>" title="">
                                                <?php echo $videos_titulo; ?></a>
                                        </h2>                                        
                                    </div>

                                    <iframe width="370" height="150" frameborder="0" allowfullscreen
                                    src="http://www.youtube.com/embed/<?php echo $videos_youtube; ?>?wmode=transparent&autohide=1&egm=0&hd=1&iv_load_policy=3&modestbranding=1&rel=0&showinfo=0&showsearch=0&theme=light"></iframe>
                                    <a class="art-mas" href="video/<?php echo $videos_id."/".$videos_url; ?>">M??s...</a>
                                    
                                </article>
                            </div>

                        </section>
                    </section>

                    <?php require_once("w-sidebar.php") ?>

                </div> <!-- #main -->
            </div> <!-- #main-container -->

            <?php require_once("w-footer.php") ?>

        </div>

<?php require_once("w-popup.php") ?>
        
    </body>
</html>
