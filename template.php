<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>
</head>

<body>

  <a id="arriba"></a>










  <header>
    <nav class="c_gob_azul navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-target="#navbarMainCollapse" data-toggle="collapse">
            <span class="sr-only">Interruptor de Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="http://www.hidalgo.gob.mx/" target="_blank" class="navbar-brand" title="Ir a la página inicial"><img alt="gob.mx" src="/images/header/logo_gobhidalgo.png" /></a>
        </div>
        <div id="navbarMainCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://ruts.hidalgo.gob.mx/" target="_blank" class="" title="Trámites">Trámites y Servicios</a></li>
            <li><a href="http://gobierno.hidalgo.gob.mx/" target="_blank" class="" title="Gobierno">Gobierno</a></li>
            <li><a href="http://estado.hidalgo.gob.mx/" target="_blank" title="Participación Ciudadana">Estado</a></li>
            <li><a href="http://www.hidalgo.gob.mx/#buzon" target="_blank" title="Datos abiertos">Buzón Ciudadano</a></li>
            <!--li>
              <form accept-charset="UTF-8" action="/busqueda" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
                <button id="goSearch" type="submit" class="btn" title="buscar" value="buscar" style="background-color: #092432" onmouseleave="this,style.background='#092432'" onmouseover="this.style.background='black'" onfocus="this.style.background='black'" >
                  <img alt="Búsqueda" width="20" height="20" class="optical-adjust-search" src="https://framework-gb.cdn.gob.mx/assets/search.svg" />
                </button>
              </form>
            </li-->
          </ul>
        </div>
      </div>
    </nav>

    <!-- VEDA ELECTORAL-->
    <!-- div class="warning-nav">
  	    <p>Este contenido será modificado temporalmente en atención a las disposiciones legales y normativas en materia electoral, con motivo del inicio de periodo de campaña</p>
  	 </div -->
    <nav class="navbar navbar-inverse c_gob_azul_2">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="logo">
            <div class="logosecretaria"></div>
          </a>
          <button type="button" class="navbar-toggle collapsed" data-target="#navbarMainCollapse2" data-toggle="collapse">
            <span class="sr-only">Interruptor de Navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-brand hidden-xs" style="color: #fff;"><b>Secretaría de Educación Pública</b></a>
          <img src="/images/header/logo_secretaria.png" class="img responsive visible-xs">
        </div>
        <div id="navbarMainCollapse2" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/content/aplicaciones/tramites/" title="Trámites" style="color: #fff;">Trámites y Servicios</a></li>
            <li><a href="/transparencia.html" title="Transparencia" style="color: #fff;">Transparencia</a></li>
            <li class="dropdown">
              <a href="#" title="Programas y Proyectos" style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Programas y Proyectos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/content/convocatorias/principalconvocatorias.html">Convocatorias</a></li>
                <li><a href="/content/programas/principalprogramas.html">Programas</a></li>
                <li><a href="/content/intraseph/index.html">INTRASEPH</a></li>
                <li><a href="/content/acerca/acerca.html">Subsecretarías</a></li>
              </ul>
            </li>
            <!--<li><a href="http://datos.gob.mx" title="Datos abiertos">Galeria</a></li>-->
            <!--<li>
                    <form accept-charset="UTF-8" action="/busqueda" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
                      <button id="goSearch" type="submit" class="btn" title="buscar" value="buscar" style="background-color: #092432" onmouseleave="this,style.background='#092432'" onmouseover="this.style.background='black'" onfocus="this.style.background='black'" >
                        <img alt="Búsqueda" width="20" height="20" class="optical-adjust-search" src="https://framework-gb.cdn.gob.mx/assets/search.svg" />
                      </button>
                    </form>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--MODAL-->










  <!-- Logos e imagen de hidalgo -->
  <?php include ('../lib18/seph/hf/header.html'); ?>
  <nav>
    <!-- Menu principal superior -->
    <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
  </nav>
  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>

    <div class="container marketing">

      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
