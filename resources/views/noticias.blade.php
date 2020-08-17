@extends('plantilla')

  @section('cabecera') 
@endsection    

@section('contenido')
 
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <p></p> <br>
    <h2>Noticias</h2>
      

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">
    @foreach ($noticias as $noticia)

                    


      <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <article class="entry">

            @if ($noticia->images->count()>0) 

            <div class="entry-img">
                
            <img src="{{$noticia->images->random()->url}}"  alt="" class="img-fluid" style='min-width:100%;' />
            </div>


            @endif

          

          <h2 class="entry-title">
            <a href="noticia/{{$noticia->slug}}">{{$noticia->titulo}}</a>
          </h2>

          <div class="entry-meta">
            <ul> 
              <li class="d-flex align-items-center"><i class="far fa-calendar"></i>  {{date('d/m/Y',strtotime($noticia->fecha))}} </li>
            </ul>
          </div>

          <div class="entry-content">
            <p>
            {!!$noticia->texto_corto!!}
            </p>
            
          </div>

        </article><!-- End blog entry -->
      </div>
    @endforeach
    </div>

    <div style='width:100%;text-align:center;'>

      <div style='display:inline-block;'>
        {{ $noticias->appends($_GET)->links()}} 
      </div>
 
    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->

  @endsection