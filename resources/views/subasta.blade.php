@extends('plantilla')
@section('contenido')
 

  <main id="main">
  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
      <p></p><br>
        <div class="d-flex justify-content-between align-items-center">
          
        <h2>Formulario de Registro de Proveedores para Plataforma de Subasta con Control Inverso</h2>
          
        </div>

      </div>
    </section> 
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-9 pt-10">
             
            <h3 style='padding-top:0px;font-weight:bold;'></h3>
            <br>
            <p></p>
            <iframe src="https://amma.org.ar/formularios/form_ordenescompra_subastas/" frameborder="0" style='width:100%;height:900px;'></iframe>

          </div>
          <div class="col-lg-3 pt-10 pt-lg-0">
            <p style='padding-top:20px;'>
            <video id="sampleMovie" width="320" height="280"  preload controls>
                <source src="fuentes/subastainversa.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' /> 
            </video> 
            </p>
             
             
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
 

  </main><!-- End #main -->

  @endsection