@extends('plantilla.admin')





@section('titulo', 'Editar Noticia')



@section('breadcrumb')

  <li class="breadcrumb-item"><a href="{{route('admin.noticia.index')}}">Noticias</a></li>

  <li class="breadcrumb-item active">@yield('titulo')</li>

@endsection





@section('contenido')





@section('estilos')

  <!-- Select2 -->

  <link rel="stylesheet" href="/adminlte/plugins/select2/css/select2.min.css">

  <link rel="stylesheet" href="/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Ekko Lightbox -->

  <link rel="stylesheet" href="/adminlte/plugins/ekko-lightbox/ekko-lightbox.css">

@endsection

@section('scripts')



  <script src="/adminlte/ckeditor/ckeditor.js"></script>

  <!-- Select2 -->

  <script src="/adminlte/plugins/select2/js/select2.full.min.js"></script>

  <!-- Ekko Lightbox -->

  <script src="/adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>



  <script>



    window.data = {

        editar : 'Si',

        datos: {

            "titulo": "{{$noticia->titulo}}" 

        }

    }





    $(function () {

      



 


    

      // Uso de lightbox

      $(document).on('click', '[data-toggle="lightbox"]', function(event) {

        event.preventDefault();

        $(this).ekkoLightbox({

          alwaysShowClose: true

        });

      });





  }); 

  </script>



@endsection 



<div id="apinoticia">

<form action="{{ route('admin.noticia.update',$noticia->id) }}" method="POST" enctype="multipart/form-data" >

@csrf

@method('PUT')



  <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->




 



        <div class="card card-info">

          <div class="card-header">

            <h3 class="card-title">Datos de la noticia</h3>



          

          </div>

          <!-- /.card-header -->

          <div class="card-body">

            <div class="row">

              <div class="col-md-12">

                <div class="form-group">



                  <label>Título</label>

                  <input



                      v-model='nombre' 

                      @blur='getNoticia' 

                      @focus='div_aparecer=false'  



                  class="form-control" type="text" id="titulo" name="titulo">



                  <label>Slug</label>

                  <input 

                  readonly 

                  v-model='generarSlug' 

                  class="form-control" type="text" id="slug" name="slug" >



                  <div v-if="div_aparecer" v-bind:class="div_clase_slug">

                      @{{div_mensajeslug}}

                  </div>

                  <br v-if="div_aparecer">


                  <label>Fecha</label>

                    <input class="form-control" type="date" id="fecha" name="fecha">

                 

                </div>

                <!-- /.form-group -->

                

              </div>

              <!-- /.col -->
 

            </div>

            <!-- /.row -->





          </div>

          <!-- /.card-body -->

          <div class="card-footer">

           

        </div>

      </div>


 





   <div class="row">

          <div class="col-md-12">



            <div class="card card-primary">

              <div class="card-header">

                <h3 class="card-title">Descripciones de la noticia</h3>

              </div>

              <div class="card-body">

                <!-- Date dd/mm/yyyy -->

                <div class="form-group">

                  <label>Texto corto:</label>



                  <textarea class="form-control ckeditor" name="texto_corto" id="texto_corto" rows="3">

                  {!! $noticia->texto_corto !!}

                  </textarea>

                

                </div>

                <!-- /.form group -->



               <div class="form-group">

                  <label>Texto:</label>



                  <textarea class="form-control ckeditor" name="texto" id="texto" rows="5">

                  {!! $noticia->texto !!}

                  </textarea>

                

                </div>                



              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->



       </div>

        <!-- /.col-md-12 -->






 






      </div>

      <!-- /.row -->









         <div class="card card-warning">

          <div class="card-header">

            <h3 class="card-title">Imágenes</h3>



           

          </div>

          <!-- /.card-header -->

          <div class="card-body">



            <div class="form-group">

                

               <label for="imagenes">Agregar imágenes</label> 

                              

               <input type="file" class="form-control-file" id="imagenes[]" name="imagenes[]" multiple 

               accept="image/*" >



              <div class='description'>

                Un número limitado de archivos pueden ser cargados en este campo

                <br>

                Límite 2048 MB por imágen

                <br>

                Tipos permitidos: jpg, jpeg, png, gif, svg.

                <br>

                <br>

              </div>



            </div>





          </div>





          <!-- /.card-body -->

          <div class="card-footer">

            

          </div>

        </div>

        <!-- /.card -->





        <div class="card card-primary">

              <div class="card-header">

                <div class="card-title">

                  Imágenes cargadas

                </div>

              </div>

              <div class="card-body">

                <div class="row">







                @foreach($noticia->images as $image)

                <div id="idimagen-{{$image->id}}" class="col-sm-2">

                  <a href="{{$image->url}}" data-title="Id:{{$image->id}}" data-toggle="lightbox" data-gallery="gallery">

                    <img src="{{$image->url}}" class="img-fluid mb-2" atyle='width:150px;height:150px;' />

                  </a>

                  <a href="{{$image->id}}" 

                  v-on:click.prevent="eliminarimagen({{$image}})"  

                  > 

                    <i class="far fa-trash-alt" style='color:red;'></i>  Id:{{$image->id}}

                  </a>

                  

                </div>

                @endforeach





                   

                </div>

              </div>

            </div>

















      <div class="card card-danger">

          <div class="card-header">

            <h3 class="card-title">Administración</h3>

          </div>

          <!-- /.card-header -->

      <div class="card-body">



       <div class="row">

               

              <div class="col-sm-12">

                     

                    <div class="form-group">

                    <div class="custom-control custom-switch">

                      <input type="checkbox"  class="custom-control-input" id="sliderprincipal" name="sliderprincipal"

                      @if($noticia->slider_principal=='Si')

                        checked

                      @endif

                      >

                      <label class="custom-control-label" for="sliderprincipal">Aparece en el Slider principal</label>

                    </div>

                  </div>



                  </div>



                



       </div>

            <!-- /.row -->









       <div class="row">

              <div class="col-md-12">

                <div class="form-group">



                   <a class="btn btn-danger" href="{{ route('cancelar','admin.noticia.index') }}">Cancelar</a>

                   <input   

                   :disabled="deshabilitar_boton==1"                 

                  type="submit" value="Guardar" class="btn btn-primary">

                 

                </div>

                <!-- /.form-group -->

                

              </div>

              <!-- /.col -->





           

                



       </div>

            <!-- /.row -->









          </div>





   

          <!-- /.card-body -->

          <div class="card-footer">

            

          </div>

        </div>

        <!-- /.card -->



 

      </div><!-- /.container-fluid -->

    </section>

   


    </form>

    </div>

 @endsection     



