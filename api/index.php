<?php

//variable get

$search = !empty($_GET['search']) ? $_GET['search'] : null;

//funciones

function limpiar($cadena){
    $cadena = str_replace('-', ' ', $cadena);
    $cadena = str_replace('_', '-', $cadena);
    $cadena = ucwords($cadena);
    return $cadena;
}

function spam($cadena){
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

function formatBytes($size,$precision = 2){
    $base = log($size, 1024);
    $suffixes = array('MB', 'KB', 'MB', 'GB', 'TB');
    @$r = round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
    return $r;
}


//inicia buscador
$context = stream_context_create(array(
"ssl"=>array("verify_peer"=>false,
"verify_peer_name"=>false,),
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

    foreach ($json->video as $i => $v) {
        $id = $v->encrypted_id;
        $titulo = spam($v->title);
        $autor = $v->author;
        $tiempo = $v->duration;
        $calidad = 192;
        $peso = formatBytes( $v->length_seconds * ($calidad / 8) * 1000 );
        $n++;
        $li .= '<li rel="'.strrev($id).'"><div class="p _p"><i class="fa-play3"></i></div><div class="t"><h3>'.$titulo.'</h3><p><span>• Duración: '.$tiempo.'</span><span>• Peso: '.$peso.'</span></p></div><div class="b"><div class="e _p"></div><div class="d"></div></div></li>';
    }

    $html = $li;

}else {
//no hace nada
}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Escuchar y Descargar música Online Mp3 Gratis! - MasMP3s</title>
    <meta name="description" content="Si quieres descargar música mp3 completamente gratis, has llegado al lugar indicado. En MasMP3s, podrás bajar tus canciones favoritas sin problemas." />
    <meta name="keywords" content="musica gratis, mp3 gratis, musica online, descargar musica mp3, descargar mp3 gratis, top 100 semanal, escuchar musica online, bajar musica gratis, bajar mp3s gratis" />

    <link rel="image_src" href="https://i.imgur.com/MF8qwWj.png" />
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <meta name="theme-color" content="#2b4272" />
    <meta name="msapplication-navbutton-color" content="#2b4272" />
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700,400italic");
        @font-face {
            font-family: icons;
            src: url(cdn/css/icons.ttf) format('truetype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @keyframes anim-rotate{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}
        [class*=" fa-"],
        [class^=fa-] {
            font-family: icons !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            letter-spacing: 0;
            -webkit-font-feature-settings: "liga";
            -moz-font-feature-settings: "liga=1";
            -moz-font-feature-settings: "liga";
            -ms-font-feature-settings: "liga"1;
            -o-font-feature-settings: "liga";
            font-feature-settings: "liga";
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .fa-bubble:before {
            content: "\e96b"
        }

        .fa-whatsapp:before {
            content: "\ea93"
        }

        .fa-facebook:before {
            content: "\ea90"
        }

        .fa-twitter:before {
            content: "\ea96"
        }

        .fa-instagram:before {
            content: "\ea92"
        }

        .fa-search:before {
            content: "\e986"
        }

        .fa-menu:before {
            content: "\e9bd"
        }

        .fa-home:before {
            content: "\e900"
        }

        .fa-headphones:before {
            content: "\e910"
        }

        .fa-star-full:before {
            content: "\e9d9"
        }

        .fa-play3:before {
            content: "\ea1c"
        }

        .fa-price-tag:before {
            content: "\e935"
        }

        .fa-spinner:before {
        top: 1px;
        content: "\e97a";
        animation: anim-rotate 1s infinite linear
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 15px;
            background: #f3f5f9;
            color:#2c3e50;
        }

        * {
            outline: 0;
            box-sizing: border-box
        }

        button,
        input {
            font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
        }

        a {
            text-decoration: none;
            color: initial
        }

        #h {
            background: #2c3e50;
            background-size: cover;
            padding: 5px 0;
            text-align: center;
            margin-bottom: 10px;
            box-shadow: 0 1px 3px rgba(0,0,0,.5);
        }

        #h>* {
            display: inline-block;
            vertical-align: top
        }

        #h h2 {
            margin: 0;
            padding-right: 30px
        }

        #h h2>a {
            display:inline-block;
            color:#fff;
            font-size:0px;
            line-height:50px;
            background:url(cdn/img/logo.png);
            width:180px;
            height:50px;
        }

        #n {
            font-size: 0;
            width: 600px;
            text-align: right;
        }

        #n a {
            display: inline-block;
            vertical-align: top;
            margin-right: 10px
        }

        #n a {
            font-size: 14px;
            color: #fff;
            padding: 16px 5px 2px 5px;
            text-transform: uppercase;
            font-weight: 700;
        }

        #n a:hover{
            color:#18bc9c;
        }

        #m {
            margin: 0 auto 10px auto;
            max-width: 770px
        }

        #m>p {
            margin: 12px 0;
            text-align: center
        }

        #m>p b {
            color: #3b5997
        }

        #m .f {
            font-size: 0;
            margin-bottom: 15px;
        }

        #m .f>* {
            display: inline-block;
            vertical-align: top
        }

        #m .f .i {
            color: #2c3e50;
            width: calc(100% - 100px);
            font-size: 18px;
            font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
            border: 1px solid #ddd;
            border-radius: 20px 0 0 20px;
            line-height: 34px;
            padding: 8px 15px;
            outline: 0
        }

        #m .f .s {
            position:absolute;
            color: #fff;
            width: 100px;
            font-size: 15px;
            background: #18BC9C;
            border-radius: 0 20px 20px 0;
            border:1px solid transparent;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0,0,0,.6);
        }

        #m .f .s:before {
            border-color: rgba(24,188,156,0);
            border-right-color: #18BC9C;
            border-width: 11px;
            margin-top: -11px;

        }

        #m .f .s:after, #m .f .s:before{
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        #m .f .s:after{border-color:rgba(24,188,156,0);border-right-color:#18BC9C;border-width:10px;margin-top:-10px}

        #m .f .s i{display:none}

        #m .f .i::placeholder {
            color: #888
        }

        #s {
            width: 100%
        }

        #s>:last-child {
            margin: 0;
            border: 1px solid #2c3e50;
            background: #fff;
            border-radius: 0 0 4px 4px;
        }

        .st {
            margin: 0 0 10px 0;
            padding: 6px 12px;
            font-size: 17px;
            color: #fff;
            font-weight: 700;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0,0,0,.5);
            box-shadow: 0 1px 4px rgba(0,0,0,.2);
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .an{
            background: #f39c12;
        }

        .ve{
            background: #18bc9c;
        }

        .az{
            background: #2c3e50;
            margin:0;
            border-radius:4px 4px 0 0;
        }

        .st i {
            margin-right: 5px
        }

        .tx {
            line-height: 21px;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 10px;
            background: #fff;
            border:1px solid #ddd;
        }

        .tx b,
        .tx strong {
            color: #2c3e50;
        }

        .tx ol{
            padding-left: 15px
        }

        .tx>* {
            margin: 0 0 10px 0;
            text-align: justify;
            color:#777;
        }

        .tx>:last-child {
            margin-bottom: 0
        }

        .tx h2,
        .tx h3 {
            margin: 0 0 10px 0;
            font-size: 16px;
            text-align: initial;
            font-weight: 400;
            color: #000;
            font-weight: 700
        }

        #f {
            margin: 0 auto 10px auto;
            max-width: 770px
        }

        #f .tx {
            padding: 10px 5px;
            border: 0;
            margin: 0;
            box-shadow: 0 0 0;
            background: inherit
        }
        

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .pull-right {
            float: right !important;
        }

        footer li {
            float: left;
            margin-right: 1.5em;
            margin-bottom: 1.5em;
        }

        footer li a {
            color:#18bc9c;
        }

        footer li a:hover {
            text-decoration:underline;
        }

        footer p {
            clear: left;
            margin-bottom: 0;
            text-align:left!important;
        }

        footer p a {
            color:#18bc9c;
        }

        .ls {
            margin: 0 -15px 10px -15px;
            padding: 0;
            list-style: none;
            font-size: 0
        }

        .ls li {
            display: inline-block;
            vertical-align: top;
            width: calc(100% / 2);
            padding: 4px 15px
        }

        .ls div {
            position: relative;
            font-size: 13px;
            padding: 10px 45px 10px 10px;
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 5px
        }

        .ls div::before {
            content: '\e9c5';
            font-family: icons;
            position: absolute;
            right: 10px;
            font-size: 14px;
            background: #2c3e50;
            color: #fff;
            padding: 6px 8px;
            border-radius: 3px
        }

        .ls h3 {
            margin: 0;
            font-size: 14px
        }

        .ls h3 a {
            display: block;
            color: #2c3e50;
        }

        .ls h3 a::before {
            content: '\e99c';
            font-family: icons;
            margin-right: 5px
        }

        .ls span a {
            color: #1f967e;
            font-size: 14px
        }

        .ls span a::before {
            content: '\e971';
            font-family: icons;
            margin-right: 5px
        }

        .lsi {
            margin: 0 0 10px 0;
            padding: 0;
            list-style: none;
            font-size: 0;
            text-align: center
        }

        .lsi li {
            width: calc(100% / 8);
            display: inline-block;
            vertical-align: top;
            padding: 5px
        }

        .lsi a {
            display: block
        }

        .lsi figure {
            margin: 0 0 3px 0;
            border-radius: 3px;
            border: 1px solid #ccc
        }

        .lsi img {
            width: 100%;
            border-radius: 3px
        }

        .lsi span {
            display: block;
            color: #333;
            font-weight: 400;
            font-size: 12px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .lsi a:hover span {
            color: #2e5e8d
        }

        .tg {
            margin: -5px 0 10px 0
        }

        .tg>* {
            display: inline-block;
            font-weight: 400;
            margin: 4px
        }

        .tg a {
            color: #7099a0;
            padding: 5px 8px;
            border-radius:4px;
        }

        .tg a:hover{
            background:#95a5a6;
            color:#fafafa;
            text-shadow: 0 1px 1px #666;

        }

        .socialize a {
            padding: 8px;
            width: 40px;
            height: 40px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            border: 1px solid #19222b;
            margin: 0 4px;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            color: #2a5175;
            -webkit-transition: all .15s ease-in-out;
            -moz-transition: all .15s ease-in-out;
            -o-transition: all .15s ease-in-out;
            transition: all .15s ease-in-out;
        }

        .socialize a.facebook:hover{
            background-color: #4A66A0;
            color: #FFF;
            text-shadow: 0 1px 1px #333;
            border-color: #4A66A0;
            text-decoration:none;
        }

        .socialize a.twitter:hover {
            background-color: #55ACEE;
            color: #FFF;
            text-shadow: 0 1px 1px #333;
            border-color: #55ACEE;
        }

        .socialize a.whatsapp:hover {
            background-color: #39a109;
            color: #FFF;
            text-shadow: 0 1px 1px #333;
            border-color: #39a109;
        }

        .sugg {
            margin: -5px 0 15px 0;
            padding: 0;
            font-size: 0;
            text-align: center
        }

        .sugg li {
            display: inline-block;
            vertical-align: top;
            padding: 3px
        }

        .sugg li a {
            display: block;
            font-size: 15px;
            line-height: 32px;
            padding: 0 10px;
            color: #eee;
            background: #2c3e50;
            border-radius: 3px
        }

        .sugg li a b{
            font-weight:normal;
            color:#fff;
        }

        .onl {
            position: fixed;
            right: 0;
            bottom: 0;
            width: 1px;
            height: 1px;
            opacity: 0
        }

        @media(max-width:767px) {
            body {
                padding-top: 60px
            }

            #h {
                position: fixed;
                left: 0;
                top: 0;
                padding:0;
                width: 100%;
                z-index: 999;
                box-shadow: 0 6px 6px -6px #777
            }

            #h h2 {
                padding: 0;
                font-size: 0
            }

            #h h2>a {
                line-height: 18px;
                background-size: 85%;
                background-repeat: no-repeat;
                margin:5px 0 0 40px;
            }

            #h span {
                font-size: 11px;
                line-height: 12px
            }

            #h>div {
                position: absolute;
                left: 7px;
                top: 12px;
                color: #fff;
                font-size: 26px;
                width: 32px;
                height: 32px;
                line-height: 32px
            }

            #h .s {
                left: auto;
                right: 7px;
                font-size: 18px
            }

            #h .m.close:before {
                content: '\ea0f'
            }

            #h .m.close {
                font-size: 18px
            }

            #n {
                display: none;
                width: 100%;
                background: rgba(0, 0, 0, .2);
                text-align: center;
                padding: 8px 5px;
                margin: -3px 0 0 0;
            }

            #n div {
                border: 0
            }

            #n a {
                font-size: 12px;
                padding: 0 10px;
                line-height: 26px;
                background: rgba(0, 0, 0, .3);
                border-radius: 3px;
                margin: 3px
            }

            #m .f .i {
                width: calc(100% - 50px);
                font-size: 15px;
                padding: 5px 10px;
            }

            #m .f .s {
                width: 50px;
            }

            #m .f .s b{
                display:none;
            }

            #m .f .s i{
                display:block;
                -webkit-transform: rotate(90deg);
                -ms-transform: rotate(90deg);
                transform: rotate(90deg);
                font-size:22px;
            }

            #m {
                padding: 10px
            }

            #m>p {
                display: none
            }

            #f,
            #m {
                margin: 0;
                border: 0;
                border-radius: 0;
                box-shadow: 0 0 0
            }

            .ls div {
                padding: 5px 10px
            }

            .ls div::before {
                content: "\e910";
                background: 0 0;
                right: 5px;
                top: 8px;
                color: #ddd
            }

            .ls li {
                width: calc(100% / 1)
            }

            .ls h3 {
                font-size: 13px
            }

            .lsi li {
                width: calc(100% / 4)
            }

            .tx b,
            .tx strong {
                font-weight: 400
            }

            #f {
                border: 0;
                border-top: 1px solid #ddd
            }

            #f .tx .a a {
                margin: 4px 7px
            }

            #f .tx .b {
                display: block
            }

        }
        .lsm{counter-reset:li;margin:0;padding:0;list-style:none}.lsm li{padding:7px;border:1px solid #ddd;background:#fff;margin-bottom:8px;border-radius:5px}.lsm li.on{border-color:#6191c1}.lsm li>*{display:inline-block;vertical-align:top;text-align:center}.lsm .p{width:36px;height:36px;color:#2c3e50;border:4px solid #2c3e50;border-radius:50%;cursor:pointer}.lsm .p i{display:inline-block;font-size:18px;position:relative;left:2px;top:5px}.lsm .p.go i:before{content:"\ea1d"}.lsm .p.go:before{display:none}.lsm .p.go i{font-size:16px;top:6px;left:0}.lsm .t{width:calc(100% - 206px);font-size:12px;text-align:left;padding:0 10px 0 13px}.lsm .t>*{white-space:nowrap;text-overflow:ellipsis;overflow:hidden;margin:0}.lsm .t h3{font-size:14px;color:#222;line-height:18px}.lsm li.on .t>*{color:#2e5e8d}.lsm .t p{color:#444}.lsm .t p>*{display:inline-block;vertical-align:top;font-size:12px;line-height:18px;margin-right:5px;color:#1f967e;}.lsm .t p>* a{text-decoration:underline;color:#2e5e8d}.lsm .t p .tm i{font-weight:700;font-style:normal}.lsm .b>:after{direction:rtl;unicode-bidi:bidi-override}.lsm .b{width:166px;padding:5px 0}.lsm .b>*{display:inline-block;vertical-align:top;width:78px;font-size:13px;line-height:26px;border-radius:2px;cursor:pointer;color:#fff;background:#2c3e50}.lsm .e:after{content:"rahcucsE"}.lsm .e.go{background:#000}.lsm .e.go:after{content:"reneteD";font-family:tahoma}.lsm .e.go:before{display:none}.lsm .d{margin-left:10px;background:#18bc9c}.lsm .d:after{content:"ragracseD"}.lsm .d.dwn{background:#000}.lsm .d.dwn:after{content:"rarreC"}#player{position:fixed;bottom:-30px;width:50px;height:30px;z-index:-99999;border:0}@media(max-width:767px){.lsm .t{width:calc(100% - 106px)}.lsm .e{display:none}.lsm .b{width:70px}.lsm .d{margin:0;width:70px}}
    </style>
</head>

<body>
    <header id="h">
        <div class="m fa-menu"></div>
        <div class="s fa-search"></div>
        <h2><a href="https://vww.celump3.com/" title="MasMP3s">MasMp3s</a></h2>
        <nav id="n">
            <a href="https://vww.celump3.com/descargar-mp3/mp3xd">Artistas</a>
            <a href="https://vww.celump3.com/descargar-mp3/tubidy">Top 100</a>
            <a href="https://vww.celump3.com/descargar-mp3/genteflow">Géneros</a></nav>
    </header>
    <main id="m">
        <p>Toda la música de tus artistas favoritos la encuentras aquí; busca, escucha, descarga y comparte con un solo clic...</p>
        <form class="f" method="post" rel="descargar-mp3">
            <input type="text" class="i" name="q" placeholder="Buscar artista o canción..." autocomplete="off">
            <button class="i s"><b>BUSCAR</b> <i class="fa-search"></i></button></form>
        <section id="s">
            <!--<h1 class="st an"><i class="fa-star-full"></i> La Mejor Página Web para Descargar Música MP3</h1>-->
            <div class="tx">
                <p>La música es una de las pocas cosas que nos inspira a mover el cuerpo y a tranquilizar la mente. Todos somos amante de los buenos sonidos y de las letras conmovedoras de los artistas que seguimos, siempre querremos estar al tanto de sus nuevos éxitos y poder escucharlos en todo momento. La solución a esto es sencilla, una página web que te permitirá <strong>descargar música</strong> de una manera completamente gratis.</p>
            </div>
            <h2 class="st ve"><i class="fa-star-full"></i> La Mejor Página Web para Descargar Música MP3</h2>
            <ul class="ls">
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/favorito-camilo">Favorito - Camilo</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/camilo">Camilo</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/safaera-bad-bunny">Safaera - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/yo-perreo-sola-bad-bunny">Yo Perreo Sola - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/por-primera-vez-camilo">Por Primera Vez - Camilo</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/camilo">Camilo</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/tattoo-rauw-alejandro">Tattoo - Rauw Alejandro</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/rauw-alejandro">Rauw Alejandro</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/hola-dalex">Hola - Dalex</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/dalex">Dalex</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/rojo-j-balvin">Rojo - J Balvin</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/j-balvin">J Balvin</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/diosa-myke-towers">Diosa - Myke Towers</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/myke-towers">Myke Towers</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/blinding-lights-the-weeknd">Blinding Lights - The Weeknd</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/the-weeknd">The Weeknd</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/mas-de-una-cita-bad-bunny">MÁS DE UNA CITA - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/bye-me-fui-bad-bunny">BYE ME FUI - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/porfa-feid">Porfa - Feid</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/feid">Feid</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/pa-romperla-bad-bunny">PA' ROMPERLA - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/elegi-rauw-alejandro">Elegí - Rauw Alejandro</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/rauw-alejandro">Rauw Alejandro</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/el-efecto-rauw-alejandro">El Efecto - Rauw Alejandro</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/rauw-alejandro">Rauw Alejandro</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/tusa-karol-g">Tusa - Karol G</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/karol-g">Karol G</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/bad-con-nicky-bad-bunny">BAD CON NICKY - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/si-ella-sale-bad-bunny">SI ELLA SALE - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/si-veo-a-tu-mama-bad-bunny">Si Veo a Tu Mamá - Bad Bunny</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/bad-bunny">Bad Bunny</a></span>
                    </div>
                </li>
                <li>
                    <div>
                        <h3><a href="https://vww.celump3.com/descargar-mp3/dont-start-now-dua-lipa">Don't Start Now - Dua Lipa</a></h3><span><a href="https://vww.celump3.com/descargar-mp3/dua-lipa">Dua Lipa</a></span>
                    </div>
                </li>
            </ul>

            <ul class="lsm mzk">
                <?php echo $html; ?>
            </ul>
            <div class="tx">
                <p>Es normal que busques la forma de obtener tus canciones favoritas sin tener que gastar dinero en plataformas de paga. Por eso, es que te presentamos la mejor alternativa gratuita para descargar cualquier tipo de música desde tu ordenador o cualquier dispositivo inteligente. En esta web, encontrarás un montón de títulos nuevos y clásicos de los artistas más renombrados del mundo de la música.</p>

                <p>Aunque en internet existen montones de páginas web que te permiten <strong>bajar música mp3</strong>, la diferencia de <strong>MasMP3s</strong>, es su sencillez. Si, hablamos de una plataforma que no necesita de muchas mecánicas para realizar tu tarea. Basta con buscar tu canción favorita en nuestra biblioteca musical, y descargar.</p>

                <p>Además de ofrecerte una plataforma completamente fácil de usar, <strong>MasMP3s</strong> es también una de las más completas en cuanto a temas musicales. Esto quiere decir, que tenemos montones de canciones de diferentes géneros para todos gustos. Los artistas favoritos de todos los oyentes están aquí, no necesitas buscar en otra web y perder tiempo sin tener los resultados que quereis.</p>

                <p>Con nuestro espectacular servicio para <strong>descargar música</strong>, podrás actualizar tu biblioteca musical en muy poco tiempo. Porque además de prestar un servicio gratuito, también es muy veloz, por lo que al cabo de muy poco tiempo tu descarga se habrá completado. A continuación, te mostraremos todos los pasos que debes seguir para <strong>bajar tu música en nuestra página web</strong>.</p>

                <h2>Descarga Música Gratis en MasMP3s</h2>
                
                <p>Queremos ser tu fuente proveedora de canciones, estando para ti en todo momento y ofrecerte un servicio de calidad. En nuestra página web podrás descargar música en formato <strong>Mp3 gratis</strong>, sin tener que esperar un montón de tiempo. En MasMP3s, basta con buscar la canción que desees y darle click a la opción de descargar.</p>
                
                <p>Quizás te preguntarás, habiendo tantas páginas donde podéis <strong>descargar Mp3</strong>, ¿que diferencia a esta web de las demás? Pues para responder a esta pregunta, te resumimos los beneficios de  utilizar nuestra web para bajar tu música completamente gratis.</p>

                <ul>
                    <li>Sistema completamente gratuito.</li>
                    <li>Descarga acelerada, no tendrás que esperar mucho tiempo para tener el archivo <strong>mp3 gratis</strong> guardado en tu ordenador.</li>
                    <li>Antes de descargar podrás escuchar la canción.</li>
                    <li>Funciona como plataforma para disfrutar de los mejores temas sin necesidad de descargarlos, si no quieres hacerlo. Basta con hacer click en el botón de escuchar y listo.</li>
                    <li>Excelente herramienta de búsqueda de etiquetas (tag). Proporcionando la correcta información, nuestro buscador encontrará la canción que estás buscando sin ningún inconveniente.</li>
                    <li>Formato Mp3, de esta manera cualquier tipo de dispositivo podrá reproducirlo sin tener problemas por compatibilidad de formatos.</li>
                </ul>

                <p>Nuestro servicio no se compara con el de cualquier otra página web de descarga de música. Nosotros somos tu mejor opción a la hora de actualizar tu biblioteca musical. No hace falta extendernos mucho, con solo leer la lista mencionada anteriormente, sabrás que estamos hablando de un excelente servicio.</p>
                
                <p>No lo pienses más, si estás en busca de una página web que te permite <strong>descargar música completamente gratis</strong> esta es tu mejor opción. en MasMP3s, podrás bajar todos los temas que desees en muy poco tiempo y sin preocuparte por nada.</p>

                <p>Olvídate de los problemas relacionados a la compatibilidad de los formato. Gracias a nuestro formato mp3, todas las canciones que descargues desde nuestra biblioteca podrás reproducirlas en cualquier dispositivo nin problemas.</p>

                <p>Es momento de optar por lo mejor, incluso si hablamos de <strong>descargar música gratis</strong>. Con MasMP3s, podrás bajar tu música favorita en muy poco tiempo y sin límites ni preocupaciones.</p>

            </div>
            <h2 class="st az"><i class="fa-price-tag"></i> Búsquedas recomendadas</h2>
            <div class="tg"><a href="https://vww.celump3.com/descargar-mp3/genteflows">Genteflow</a><a href="https://vww.celump3.com/descargar-mp3/yump3">YuMP3</a><a href="https://vww.celump3.com/descargar-mp3/napster">Napster</a><a href="https://vww.celump3.com/descargar-mp3/mp3xd">MP3xd</a><a href="https://vww.celump3.com/descargar-mp3/buscar-mp3">Buscar MP3</a><a href="https://vww.celump3.com/descargar-mp3/vidztomp3">VidztoMP3</a><a href="https://vww.celump3.com/descargar-mp3/imusic">Imusic</a><a href="https://vww.celump3.com/descargar-mp3/offliberty">Offliberty</a><a href="https://vww.celump3.com/descargar-mp3/caidos">Caidos</a><a href="https://vww.celump3.com/descargar-mp3/descargar-audio-de-youtube">Descargar audio de youtube</a><a href="https://vww.celump3.com/descargar-mp3/genteflow">Genteflow</a><a href="https://vww.celump3.com/descargar-mp3/my-free-mp3m">My free MP3m</a><a href="https://vww.celump3.com/descargar-mp3/mp3-juices">MP3 juices</a><a href="https://vww.celump3.com/descargar-mp3/convertidor-mp3">Convertidor mp3</a><a href="https://vww.celump3.com/descargar-mp3/converto">Converto</a><a href="https://vww.celump3.com/descargar-mp3/mp3ar">MP3ar</a><a href="https://vww.celump3.com/descargar-mp3/free-music-downloader">Free music downloader</a><a href="https://vww.celump3.com/descargar-mp3/youtube-mp3">Youtube MP3</a><a href="https://vww.celump3.com/descargar-mp3/vidtomp3">VidtoMP3</a><a href="https://vww.celump3.com/descargar-mp3/grantono">Grantono</a><a href="https://vww.celump3.com/descargar-mp3/buscarmp3">BuscarMP3</a><a href="https://vww.celump3.com/descargar-mp3/mp3-download">MP3 download</a><a href="https://vww.celump3.com/descargar-mp3/force-download">Force download</a><a href="https://vww.celump3.com/descargar-mp3/devociontotalnet">Devociontotalnet</a><a href="https://vww.celump3.com/descargar-mp3/converttoaudio">Converttoaudio</a><a href="https://vww.celump3.com/descargar-mp3/bajatodo">Bajatodo</a><a href="https://vww.celump3.com/descargar-mp3/bajomp3">BajoMP3</a><a href="https://vww.celump3.com/descargar-mp3/exitosmp3">ExitosMP3</a><a href="https://vww.celump3.com/descargar-mp3/esritmo">Esritmo</a><a href="https://vww.celump3.com/descargar-mp3/jdownloader">Jdownloader</a></div>
        </section>
    </main>

    <footer id="f" data="figure img">

<div class="tx">

    <ul class="list-unstyled"> 
        <li class="pull-right"><a href="#top" id="gotop">Ir arriba</a></li>
        <li><a href="https://web.archive.org/web/20160103155232/http://www.masmp3s.com/">Inicio</a></li>
        <li><a href="https://web.archive.org/web/20160103155232/http://www.masmp3s.com/terminos/">TOS</a></li>
        <li><a href="https://web.archive.org/web/20160103155232/http://www.masmp3s.com/contacto/">Contácto</a></li>
    </ul> 

    <p class="pull-right socialize">
        <a class="facebook" href="https://web.archive.org/web/20160103155232/https://facebook.com/TusMp3" target="_blank" title="MásMP3's en Facebook"><i class="fa fa-facebook"></i></a>
        <a class="twitter" href="https://web.archive.org/web/20160103155232/https://twitter.com/TusMP3net" target="_blank" title="@TusMP3net en Twitter"><i class="fa fa-twitter"></i></a>
        <a class="whatsapp" href="https://web.archive.org/web/20160103155232/https://plus.google.com/106133199385690549851" target="_blank" title="MásMP3's en Google+"><i class="fa fa-whatsapp"></i></a> </p>

    <p>MásMP3's © Derechos reservados 2020 - 2022</p>
    <p>Powered by <a href="https://last.fm/" target="_blank">last.fm</a>.</p>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js?v=<?php echo time(); ?>"></script>
</div>

</footer>
</body>
  
</html>