@extends('plantilla')
@section('cabecera')
  <meta property="og:title" content="GESTA | @yield('titulo')" />
  <meta property="og:description" content="GESTA nuclea a 11 entidades que promueven y fomentan la economía social con un trabajo interdisciplinario e integrado a proyectos destinados a más de 50.000 asociados, creando y sosteniendo numerosas fuentes de trabajo e inversiones de gran impacto social." />
  <meta property="og:image" content="http://www.gesta.org.ar/{{$imagen}}" />      
@endsection
@section('contenido')
 

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
        <div class="col-lg-3 pt-10 pt-lg-0">
            <p style='padding-top:100px;'>
             <img src="{{$imagen}}" />
            </p>
          </div>
          <div class="col-lg-9 pt-100">
            <p></p><br><p></p> 
            <h3 style='padding-top:20px;font-weight:bold;'>@yield('titulo')</h3>
            <br>
            <p></p> 
            @yield('texto')    
            <p></p>
            <i class="fa fa-" aria-hidden="true" style='padding-right:10px;'></i>
             
            <br>
            @isset($direccion)
                <i class="fa fa-map-marker" aria-hidden="true" style='padding-right:10px;'></i>
                {{$direccion}} 
                <br>
            @endisset
            @isset($telefono)
                <i class="fa fa-phone" aria-hidden="true" style='padding-right:10px;'></i>
                {{$telefono}} 
                <br>
            @endisset

            @isset($email)
                <i class="fa fa-envelope" aria-hidden="true" style='padding-right:10px;'></i>
                <a href="mailto:{{$email}} ">{{$email}} </a> 
                <br>
            @endisset

            @isset($enlace)
                <i class="fa fa-link" aria-hidden="true" style='padding-right:10px;'></i>
                <a href="http://{{$enlace}} " target="_blank" rel="noopener noreferrer">{{$enlace}} </a> 
                <br>
            @endisset

            @isset($facebook)
            <i class="fab fa-facebook-square" style='padding-right:10px;'></i>
                {{$facebook}} 
                <br>
            @endisset

   


          </div>
        
        </div>

      </div>
    </section><!-- End About Section -->
 

  </main><!-- End #main -->

  @endsection