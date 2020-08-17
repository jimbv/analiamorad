@extends('plantilla') 
@section('cabecera')
  <meta property="og:title" content="GESTA | {{$noticia->titulo}}" />
  <meta property="og:description" content="{!!$noticia->texto_corto!!}" />
  @if ($noticia->images->count()>0) 

              <meta property="og:image" content="http://www.gesta.org.ar/{{$noticia->images->random()->url}}" style='min-width:100%;' />

    @endif
      
  <meta property="og:url" content="http://www.gesta.org.ar/noticia/{{$noticia->slug}}" />
@endsection
@section('contenido')
  <main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
<p></p> <br>
    <div class="d-flex justify-content-between align-items-center">
       
      <ol>
        <li><a href="/">Inicio</a></li>
        <li><a href="/noticias">Noticias</a></li>
        <li> {{$noticia->titulo}} </li>
        
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container">

    <div class="row">

      <div class="col-lg-12 entries">

        <article class="entry entry-single">
            @if ($noticia->images->count()>0) 

            <div class="entry-img" style='max-height: 100%;
  margin: 0px 0px;vertical-align:middle;'>
                
            <img src="{{$noticia->images->random()->url}}"  alt="" class="img-fluid">
            </div>
<br>

            @endif
           

          <h2 class="entry-title">
           {{$noticia->titulo}} 
          </h2>

          <div class="entry-meta">
            <ul> 
              <li class="d-flex align-items-center"><i class="far fa-calendar"></i> {{date('d/m/Y',strtotime($noticia->fecha))}} </li>
               
            </ul>
          </div>

          <div class="entry-content">
            <p>
            {!!$noticia->texto_corto!!}
            </p>

            <p>
            {!!$noticia->texto!!}
            </p>
 
          </div>

          <div class="entry-footer clearfix"> 
            <div class="float-right share">
              <!--a href="" title="Compartir en Twitter"><i class="icofont-twitter"></i></a-->
              
              
               <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.gesta.org.ar%2Fnoticia%2F{{$noticia->slug}}&amp;src=sdkpreparse"   title="Comaprtir en Facebook"><i class="icofont-facebook"></i></a> 
              <!--a href="" title="Compartir en Instagram"><i class="icofont-instagram"></i></a-->
            </div>

          </div>

        </article><!-- End blog entry -->
 

      </div><!-- End blog entries list -->
 
 

    </div>

  </div>
</section> 

</main> 

@endsection