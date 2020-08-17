@extends('plantilla')
@section('cabecera')
<meta property="og:title" content="Analía Morad | Licenciada en Psicolog{ia" />
    <meta property="og:description" content="Tratamientos psicológicos - Mindfullness" />
    <meta property="og:image" content="http://www.analiamorad.com.ar/fuentes/facebook.png" />      
    <meta property="og:url" content="http://www.analiamorad.com.ar" />
@endsection
@section('contenido')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

      <div class="carousel-item active " style="background-image: url(src/psicolaboral.jpg)">
          <div class="carousel-container"> 
          <h2 class="animate__animated animate__fadeInDown"> Psicoterapia cognitiva</span></h2> 
          </div>
        </div>


        <div class="carousel-item  " style="background-image: url(src/pareja.jpg)">
          <div class="carousel-container"> 
          <h2 class="animate__animated animate__fadeInDown">Terapia de pareja</span></h2> 
          </div>
        </div> 

        
        <div class="carousel-item  " style="background-image: url(src/mindfullnes.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Mindfullnes</span></h2> 
             
            </div>
          </div>
        </div>  

 
        

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-12">
            <h3>¿Querés vivir una vida plena? ¡Mantené tu mente en forma! </h3> <br>
              Mira lo que piensas de ti y entenderás como te sientes, PIENSA bien y te SENTIRÁS mejor. <p></p>
              Estamos determinados por nuestros pensamientos pero sobretodo por creer que nuestros pensamientos son hechos. 
              Ésta es nuestra primer disfuncion. Los pensamientos son solo pensamientos NO son hechos, Y como tales pueden ser correctos o incorrectos. <br>
              ¿Cuántas veces hemos creido  que nos iba a suceder algo terrible y no pasó?  El problema es que si bien no ocurrió, nuestro cuerpo si lo vivenció. <p></p>
              Visualizamos la catastrofe o aquello a lo que tanto tememos y nuestro  organismo se lo cree. 
              Respondemos fisiologicamente primero emocionalmente despues y comportamentalmente despues. Es así como nuestros pensamientos guían nuestras emociones  y nuestras acciones. 
              <p></p>
              Vivimos, sentimos y actuamos en funcion de  como pensamos. <STRONG> PENSALO</STRONG>!               
          </div>
       
        </div>

      </div>
    </section><!-- End About Section -->
  
 
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Destacados</h2> 
        </div>

        <div class="row">
        <div class="col-lg-6">
        <a href="/ "  rel="noopener noreferrer">
        Tratamiento
        <br>  
            </a>
            </div><div class="col-lg-6">
            <a href="/ "  rel="noopener noreferrer">
           Certificaciones
            <br><br>
             
            </a>
            </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  @endsection