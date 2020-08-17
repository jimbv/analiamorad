@extends('plantilla')

  @section('cabecera') 
@endsection    

@section('contenido')
 

  <main id="main">
  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
      <p></p><br>
        <div class="d-flex justify-content-between align-items-center">
          
        <h2>Ver Canal 20 en vivo</h2>
          
        </div>

      </div>
    </section> 
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container"> 
        
        <iframe src="canal20/" frameborder="0" style='width:100%;height:690px;'></iframe>

        </div>
    </section><!-- End About Section -->
 

  </main><!-- End #main -->

  @endsection