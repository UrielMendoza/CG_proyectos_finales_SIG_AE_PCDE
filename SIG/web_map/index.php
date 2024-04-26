<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CentroGEO. Proyectos finales. SIG. AE. PCDE.</title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" /> -->

    <!-- Leaflet --> 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Mapa -->
    <!-- <script src="./js/main.js"></script> -->

    <!-- Geocoder -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <!-- Estilo -->
    <link rel="stylesheet" href="./css/style.css"> 

</head>
<body>

<!-- Codigo PHP-->
    <?php

    error_reporting (E_ALL  ^  E_NOTICE  ^  E_DEPRECATED);
    // 1.- IDENTIFICACION nombre de la base, del usuario, clave y servidor

    $db_host="localhost";
    $db_name="id21877429_pgi_01";
    $db_login="id21877429_alumendoza";
    $db_pswd="Rohanio#19";

    $conn = mysqli_connect($db_host,$db_login,$db_pswd,$db_name);
        if(!$conn)
        {
            echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
        }
        else
        {
            //echo "<h3> </h3><hr><br>";
        }

    // 2.- CONEXION A LA BASE DE DATOS
    mysqli_select_db($conn, $db_name) or die(mysql_error());

    $data1 = "";

    //--------------------------------------------PARQUES-------------------------------------------------------------

    $sql = "SELECT * FROM agua";  
    $resultado = mysqli_query($conn, $sql);
    //echo $sql.'<br>';

    if($resultado->num_rows>0){
    $num_filas = $resultado->num_rows;
    //echo "Agua ".$num_filas."<br>";

    $data1 = $data1."\n var agua = { 'type':'FeatureCollection', \n 'features': [ \n";
    $i=1;
    while ($fila=$resultado->fetch_assoc())
    {   if($i < $num_filas){
        $data1 = $data1."{'type':'Feature',\n 'properties':{'id':'".$fila['id']."', 'tipo':'".$fila['tipo']."', 'duracion':'".$fila['duracion']."', 'observacion':'".$fila['observacion']."','time':'".$fila['time']."'}, \n'geometry':{ 'type':'Point', 'coordinates':[".$fila['longitud'].",".$fila['latitud']."] }},\n";
        $i++;
        }
        else{
        $data1 = $data1."{'type':'Feature',\n 'properties':{'id':'".$fila['id']."', 'tipo':'".$fila['tipo']."', 'duracion':'".$fila['duracion']."', 'observacion':'".$fila['observacion']."','time':'".$fila['time']."'}, \n'geometry':{ 'type':'Point', 'coordinates':[".$fila['longitud'].",".$fila['latitud']."] }},\n";  
        }

    }
        $data1 = $data1.']};';

    }

    $file = fopen("agua.js", "w");
    fwrite($file, $data1);
    fclose($file);
    ?>

    <!-- Pagina Inicio -->
    <section class="inicio" id="inicio">
        <!-- Titulos -->
        <div class="inicio-titulo">
            <div class="inicio-titulo--letras">
                <h1>CentroGEO.</h1>
                <h1>Posgrado Integrado en Ciencias en Información Geoespacial.</h1>
                <h2>Proyectos Finales. SIG, AE y PCDG.</h2>
                <h3> <p style="color: black;">SIG:</p>Estimación de zonas potenciales para la captación de agua de lluvia a nivel catastral mediante agrupación por estadística local (HotSpots) en la Ciudad de México (CDMX).</h3>
                <h3><p style="color: black;">AE:</p> Análisis de Componentes Principales para obtener un índice de acceso a infraestructura de agua, interpolación geoestadística espacial Kriging para datos de precipitación y Agrupación por estadística local Getis-Ord (HotSpots) de zonas de captación de agua de lluvia.</h3>
                <h3><p style="color: black;">PCDG:</p> Georreferenciación de zonas con problemáticas de agua, actualización de una base de datos espacial para reporte de problemas de escasez y visualización dinámica de la información mediante un mapa web.</h3>
                <h4>Mtros:
                    <ul>
                        <li>
                            <div style="display: flex; align-items: center;">
                                <img src="https://www.centrogeo.org.mx/images/stories/profiles/avatar/avatar731_adc31899d47b49037e715b65bd57e761.jpg" alt="Mtra. Karime González Zuccolotto" style="width: 40px; height: 40px; border-radius: 50%;">
                                Mtra. Karime González Zuccolotto
                            </div>
                        </li>
                        <li>
                            <div style="display: flex; align-items: center;">
                                <img src="https://www.centrogeo.org.mx/images/stories/profiles/avatar/avatar626_62c79cdd27ec120673c6a0248528b4ac.png" alt="Dr. Camilo Alberto Caudillo Cos" style="width: 40px; height: 40px; border-radius: 50%;">
                                Dr. Camilo Alberto Caudillo Cos
                            </div>
                        </li>
                        <li>
                            <div style="display: flex; align-items: center;">
                                <img src="https://www.centrogeo.org.mx/images/stories/profiles/avatar/avatar652_5925e657d96699871d88263fb0046125.jpg" alt="Dra. María del Pilar Fuerte Celis" style="width: 40px; height: 40px; border-radius: 50%;">
                                Dra. María del Pilar Fuerte Celis
                            </div>
                        </li>
                        <li>
                            <div style="display: flex; align-items: center;">
                                <img src="https://www.centrogeo.org.mx/images/stories/profiles/avatar/avatar664_fd700a0d0ed24b3f0d4ca400098c50f0.png" alt="Dr. Oscar Gerardo Sánchez Siordia" style="width: 40px; height: 40px; border-radius: 50%;">
                                Dr. Oscar Gerardo Sánchez Siordia
                            </div>
                        </li>
                        <li>
                            <div style="display: flex; align-items: center;">
                                <img src="https://www.centrogeo.org.mx/images/stories/profiles/avatar/avatar683_87da0fa069b55eb2ffcc3c47d3fadd06.jpg" alt="Dr. Gandhi Samuel Hernández Chan" style="width: 40px; height: 40px; border-radius: 50%;">
                                Dr. Gandhi Samuel Hernández Chan
                            </div>
                        </li>
                    </ul>
                </h4>
            </div>
        </div>        
        <!-- Logos -->
        <div class="inicio-logos">
            <div class="grupo1">
                <span>
                    <img src="./assets/icons/CentroGeo_Logo-H.png" alt="centrogeo">
                </span>
                <span>
                    <img src="./assets/icons/CONAHCYT.png" alt="conacyt">
                </span>
            </div>
        
        </div>
        <!-- Boton -->
        <div class="inicio-boton" id="btn-inicio-container">
            <button id="btn-inicio">Iniciar</button>
        </div>
    </section>


    <!-- Principal -->
    <section class="mapa-container">
        <!-- Menu -->
        <div class="menu-container" id="menu-container">
            <!-- Panel de capas -->
            <aside class="menu" id="menu">

                <!-- Seccion de logos-->
                <div class="capas-lista-logos">
                    <div class="grupo1">
                        <span>
                            <img src="./assets/icons/CentroGeo_Logo-H.png" alt="centrogeo">
                        </span>
                        <span>
                            <img src="./assets/icons/CONAHCYT.png" alt="conacyt">
                        </span>
                    </div>                  
                </div>

                <!-- Contenido del menú capas-->
                <div class="capas-lista">
                    <div class="capas-lista-titulo">
                        <img class="capas-lista-icono" src="./assets/icons/layers.svg" alt="layers">
                        <h1>Capas.</h1>
                    </div>                    
                    <!-- Lista de capas -->
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa1" name="capa1" value="capa1" checked>
                        <label for="capa1">Colonias con problematicas de agua.<br>CDMX.<br>WebScraping</label>
                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa2" name="capa2" value="capa2">
                        <label for="capa2">Reporte de fugas.<br>Nacional.<br>AppInventor</label>
                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa3" name="capa3" value="capa3">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa4" name="capa4" value="capa4">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa10" name="capa10" value="capa10">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa11" name="capa11" value="capa11">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa12" name="capa12" value="capa12">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa13" name="capa13" value="capa13">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa14" name="capa14" value="capa14">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa15" name="capa15" value="capa15">

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa5" name="capa5" value="capa5" checked>

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa6" name="capa6" value="capa6" checked>

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
<!--                     <div class="capas-lista-titulo">
                        <img class="capas-lista-icono" src="./assets/icons/rgb.svg" alt="layers">
                        <h1>Planet RGBs.</h1>
                    </div>    -->
                    <!-- Lista de capas -->
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa7" name="capa7" value="capa7" >

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa8" name="capa8" value="capa8" >

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>
                    <div class="capas-lista-elemento">
                        <input type="checkbox" id="capa9" name="capa9" value="capa9" >

                        <span>
                            <img src="" alt="">
                        </span>
                    </div>

                </div>

                <!-- Contenido de la consulta-->
                <div class="capas-lista">
                    <div class="capas-lista-titulo">
                        <img class="capas-lista-icono" src="./assets/icons/search.svg" alt="layers">
                        <h1>Consulta.</h1>
                        <!-- Panel de seleccion de categoria de cobertura-->
                        <div id="busqueda" class="busqueda">
                            <label for="categoria" id="categoria">Delegación.</label>
                            <select id="cobertura">
                                <option value="'TODOS'">Todos.</option>
                                <option value="'COYOACAN'">Coyoacan.</option>
                            </select>
<!--                             <div align="center"><input type="submit" value="Ejecutar" class="botton-ejecutar" id="ejecutar"/></div> -->
                            <br>
                        </div>
                    </div>
                </div>

            </aside>

            <!-- Boton de cierre del menu -->
            <button id="toggleMenuButton2" class="toggle-menu-button2">
                <img src="./assets/icons/close.svg" alt="close" id="toggleMenuButtonImg2">
            </button>
        </div>  


        <!-- Mapa Tiulo -->
        <div id="mapa-titulo">Proyecto final.</div>
        <!-- Simbologia -->
        <div id="mapa-simbologia">
            <!-- <img id="mapa-simbologia-img_1" src="./assets/icons/simbologia.png" alt="igg_simbologia"> -->
            <!-- <img id="mapa-simbologia-img_2" src="./assets/icons/simbologia_cambio.png" alt="igg_simbologia"> -->
            <img id="mapa-simbologia-img" alt="igg_simbologia">
        </div>

        <!-- Popup -->
        <div id="popup"></div>

        <!-- Mapa -->
        <div id="map">
            <!-- Boton de menu -->
            <button id="toggleMenuButton" class="toggle-menu-button">
                <img src="./assets/icons/menu.svg" alt="menu" id="toggleMenuButtonImg">
            </button>
        </div>

    </section>

    <!-- Data -->
    <script src="./colonias_cdmx.js" type="text/javascript"></script>
    <script src="./assets/data/colonias_cdmx.js"></script>
    <script src="./agua.js" type="text/javascript"></script>
    
    <!-- Script -->
    <script src="./js/main.js"></script>



</body>
</html>