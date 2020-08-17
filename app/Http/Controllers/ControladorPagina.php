<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Noticia; 
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ControladorPagina extends Controller
{  
    
    public function index()
    { 
        
        $resultado = ' ';
        return view('pagina.index',compact('resultado'));
    }
    public function noticias(){
        $noticias =  Noticia::with('images')->where('titulo','like',"%%")->orderBy('fecha','desc')->paginate(6);
        
        return view ('noticias',compact('noticias'));
    }
    
    public function contacto(){  
        $resultado = ' ';
        return view ('contacto',compact('resultado'));
    }

    public function contactoenviado(Request $request){
 
           
            $nombre = $request->nombre;
            $localidad = $request->localidad;
            $email = $request->email;
            $telefono = $request->telefono;
            $asunto = $request->asunto;
            $mensaje = $request->mensaje;

            
            
            $mensaje_enviar = $request->validate([
                'nombre'=> 'required',
                'localidad'=> 'required',
                'email'=> 'required|email',
                'mensaje'=> 'required',
                'telefono'=> 'required',
                'asunto'=> 'required'
            ]);


            // Enviar el email, el metodo send envia un MAILABLE que es una clase de laravel para armar un email

            Mail::to('joseignaciomartin@gmail.com')->send(new ContactoMail($mensaje_enviar));

            $resultado = '<div style="font-weight:bold;font-size:24px;color:green;">Gracias por enviarnos su mensaje en la brevedad nos contactaremos.<br/><br/></div>';
            
        return view ('contacto',compact('resultado'));

    }

    public function noticia(Request $respuesta)
    { 
        $slug = $respuesta->slug;
        $noticia = Noticia::with('images')->where('slug',$slug)->firstOrFail(); 
        return view('noticia',compact('noticia'));
    }

    public function producto(Request $respuesta)
    { /*
        $categorias = Category::all(); 
        $slug = $respuesta->slug;
        $producto = Product::where('slug',$slug)->firstOrFail();  
        return view('tienda.producto',compact('categorias','producto'));*/
    }

}
