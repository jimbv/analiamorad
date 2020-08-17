@extends('plantilla')

  @section('cabecera') 
@endsection    

@section('contenido')
 


<main id="main">
 
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
  <p></p><br>
    <div class="d-flex justify-content-between align-items-center">
      <h2>Contacto</h2>
  
    </div>

  </div>
</section> 
 
<section id="contact" class="contact">
  <div class="container">
 
    
    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Ubicación:</h4>
            <p> Bell Ville, Córdoba </p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>  <a href="mailto:analiamorad@yahoo.com.ar">analiamorad@yahoo.com.ar</a></p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Teléfono:</h4>
            <p> (03537) 423547</p>
          </div>

          <div class="phone">
          <i class="fab fa-whatsapp"></i>
            <h4>Celular:</h4>
            <p><a href='https://wa.me/5493515570631'>351 5570631</a></p>
          </div>
        </div>
        
      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">



      <form id="contact-form"  action="{{ route('contacto') }}" method="post" role="form" class="php-email-form">

        @csrf

        @method('POST')








        <div class="form-row">

            <div class="form-group col-md-6">

              <label for="name">Nombre y Apellido</label>

              <input type="text" name="nombre" class="form-control" id="nombre" data-rule="minlen:4" data-msg="Por favor ingresa al menos cuatro letras" />

              <div class="validate"></div>{!!$errors->first('nombre','<br/><div style="color:red;">:message</div><br/>')!!}

            </div>

            <div class="form-group col-md-6">

              <label for="name">Email</label>

              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Ingresa una dirección de email válida" />

              <div class="validate"></div>{!!$errors->first('email','<br/><div style="color:red;">:message</div><br/>')!!}

            </div>

          </div>

          <div class="form-row">

            <div class="form-group col-md-6">

              <label for="name">Localidad</label>

              <input type="text" name="localidad" class="form-control" id="localidad" data-rule="minlen:4" data-msg="Por favor ingresa al menos cuatro letras" />

              <div class="validate"></div>{!!$errors->first('localidad','<br/><div style="color:red;">:message</div><br/>')!!}

            </div>

            <div class="form-group col-md-6">

              <label for="name">Teléfono</label>

              <input type="text" name="telefono" class="form-control" id="telefono" data-rule="minlen:4" data-msg="Por favor ingresa al menos cuatro letras" />

              <div class="validate"></div>{!!$errors->first('telefono','<br/><div style="color:red;">:message</div><br/>')!!}

            </div>

          </div>

          <div class="form-group">

            <label for="name">Asunto</label>

            <input type="text" class="form-control" name="asunto" id="asunto" data-rule="minlen:4" data-msg="El asunto debe tener al menos ocho letras" />

            <div class="validate"></div>{!!$errors->first('asunto','<br/><div style="color:red;">:message</div><br/>')!!}

          </div>

          <div class="form-group">

            <label for="name">Mensaje</label>

            <textarea class="form-control" name="mensaje" rows="10" data-rule="required" data-msg="Por favor completa el mensaje"></textarea>

            <div class="validate"></div>{!!$errors->first('mensaje','<br/><div style="color:red;">:message</div><br/>')!!}

          </div>

          <div class="mb-3">
 
 

            

            @if($errors->any()) 
            <div class="error-message">
              <div style='color:red;'>No se pudo enviar el formulario, por favor revise los errores.</div>  
            </div> 
            @endif

            

            {!!$resultado!!} 

          </div>

          <div class="text-center"><button type="submit" onclick="document.getElementById('contact-form').submit();">Enviar mensaje</button></div>

        </form>

        
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
  @endsection