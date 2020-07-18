<?php

namespace App\Http\Controllers\Helpers;

use SearchQueryGeneratorController;

class SearchYoutube {

  public function limpiar($cadena) {
    $cadena = str_replace('-', ' ', $cadena);
    $cadena = str_replace('_', '-', $cadena);
    $cadena = ucwords($cadena);
    return $cadena;
  }

  public function spam($cadena) {
    //$cadena = str_replace('(Video Oficial)', '', $cadena);
    //$cadena = str_replace('(Lyrics)', '', $cadena);
    //$cadena = str_replace('(Lyric Video)', '', $cadena);
    //$cadena = str_replace('Letra', '', $cadena);
    //$cadena = str_replace('LETRA', '', $cadena);
    $cadena = str_replace('.wmv', '', $cadena);
    //$cadena = str_replace('(LYRICS)', '', $cadena);
    //$cadena = str_replace('( Audio Oficial )', '', $cadena);
    $cadena = str_replace('|', '', $cadena);
    $cadena = str_replace('(', '', $cadena);
    $cadena = str_replace(')', '', $cadena);
    $cadena = str_replace('/', '', $cadena);
    //$cadena = str_replace('(Con La Letra)', '', $cadena);
    //$cadena = str_replace('(con Letra)', '', $cadena);
    //$cadena = str_replace('Official Video', '', $cadena);
    //$cadena = ucwords($cadena);
    return $cadena;
  }

  public function formatBytes($size, $precision =2) {
    $base = log($size, 1024);
    $suffixes = array('MB', 'KB', 'MB', 'GB', 'TB');
    @$r = round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
    return $r;
  }

  public static function searchResult($search) {
    $context = stream_context_create(array(
      "ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false,),
      "http" => array("header" => "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36")
      ));
      
    $fuente = @file_get_contents("https://www.youtube.com/search_ajax?style=json&embeddable=1&search_query=".$search,false,$context);
    $json = json_decode($fuente);
    $li = '';

    if(!empty($json->video[0])){
    
        $datos = $json->video[0];
        $idyoutube = $datos->encrypted_id;
        $titulo = $datos->title;
        $duracion = $datos->duration;
        $visitas = $datos->views;
        $likes = $datos->likes;
        $dislikes = $datos->dislikes;
        $autor = $datos->author;
        $creacion = $datos->added;
        $tiempo = $datos->duration;
        $descripcion = $datos->description;
        $calidad = 192;
        $peso = formatBytes( $datos->length_seconds * ($calidad / 8) * 1000 );
        $n = 0;
        $descri = '<p><strong>Bajar '.limpiar($search).' en Formato MP3</strong></p><p>Descargar Mp3 de las mejores canciones de <strong>'.limpiar($search).'</strong> 2020, podrás escuchar musica online y bajar canciones sin límites. Te recomendamos escuchar '.limpiar($search).' en distintos formatos de audio mp3 disponibles.</p><p>Ahora puedes descargar mp3 de <strong>'.limpiar($search).'</strong> gratis y en la más alta calidad 320 kbps, este playlist de musica online contiene resultados de búsqueda que fueron previamente seleccionados para ti, aquí obtendrás las mejores canciones y videos que están de moda en este 2020, podrás bajar musica mp3 de <strong>'.limpiar($search).'</strong> en varios formatos de audio como MP3, WMA, iTunes, M4A, ACC.</p>';
    
        // foreach ($json->video as $i => $v) {
        //     $id = $v->encrypted_id;
        //     $titulo = spam($v->title);
        //     $autor = $v->author;
        //     $tiempo = $v->duration;
        //     $calidad = 192;
        //     $peso = formatBytes( $v->length_seconds * ($calidad / 8) * 1000 );
        //     $n++;
        //     $li .= '<li rel="'.strrev($id).'"><div class="p _p"><i class="fa-play3"></i></div><div class="t"><h3>'.$titulo.'</h3><p><span>• Duración: '.$tiempo.'</span><span>• Peso: '.$peso.'</span></p></div><div class="b"><div class="e _p"></div><div class="d"></div></div></li>';
        // }
      
        // $html = $li;
    }
  }

}

?>
