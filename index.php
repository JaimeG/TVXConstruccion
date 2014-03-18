<? include('geo/checkgeo.class.php');?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TVX - </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:app_id" content="815724718444105"/>
        <link rel="shortcut icon" href="http://tvx.com.sv/favicon.ico" type="image/x-icon">
        <link rel="icon" href="http://tvx.com.sv/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png"/>
        <link href="http://tvx.com.sv/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon" sizes="57x57" />
        <link href="http://tvx.com.sv/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon" sizes="72x72" />
        <link href="http://tvx.com.sv/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon" sizes="114x114" />

        <link href='http://fonts.googleapis.com/css?family=Ruda:400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        
        <link rel="stylesheet" type="text/css" href="css/dcsns_wall.css" media="all" />
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script type="text/javascript" src="http://source.netandino.com/html5/player-2012-free.js"></script>
        

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> brow-fluidser. Please <a href="http://brow-fluidsehappy.com/">upgrade your brow-fluidser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!-- header -->
    <div class="navbar navbar-inverse navbar-fixed-top" id="headerBg">
      <div class="container-fluid">

            <ul id="leftHeader" class="nav navbar-nav navbar-left hidden-xs">
                <li><a href="#" id="logoHeader"> <img src="img/tvx-logo.png" alt=""></a></li>
                <li><a href="https://www.facebook.com/canalTVX" target="_blank" class="headerFb"></a></li>
                <li><a href="https://twitter.com/canalTVX" target="_blank" class="headerTw"></a></li>
                <li><a href="http://instagram.com/canalTVX" target="_blank" class="headerIg"></a></li>
                <li><a href="http://www.youtube.com/user/CanalTVX" target="_blank" class="headerYt"></a></li>
                <li><a href="http://www.pinterest.com/canaltvx/" class="headerPr"></a></li>
                <li><div class="hidden-xs" id="separador"></div></li>
                <li></li>
            </ul>
            
            <div class='visible-xs' id="headerPhone">
              <div class="float-left">
                  <img src="img/tvx-logo.png" class="float-leftimg" alt="">
                  <div id="separador" class="float-leftimg"></div>
              </div>

            </div> 

      </div>
    </div>
    <!-- /header -->

    <div class="container-fluid">
      <div class="row-fluid">

          <div class="col-sm-12 col-lg-8 col-sm-offset-2 col-lg-offset-2">
            <? if(checkGeo::check()){ ?>
              <div id="player" class="hidden-xs hidden-sm hidden-md">
                <div id="container"></div>
              </div>
    
              <div id="stream-mobile">
                <a href="http://panel.elsalvadordigital.com:1935/canal23/canal23/playlist.m3u8" target="_blank">
                  <img src="img/1.jpg" class="img-responsive centerImg hidden-lg " alt="">
                </a>
              </div>
            <? }else{?>
          
          <div class="col-sm-12 col-lg-12" id='tvframe'>
            <b>CANAL 23</b> SEÑAL ABIERTA - <b>CLARO TV</b> / <b>CANAL 28</b> TIGO DIGITAL / <b>CANAL 25</b> ZONA ORIENTAL
          </div>

          </div>

          <!-- <div class="col-sm-12 col-lg-4">
              <div id="fb-root"></div>
              <div id="fbContainer">
                <div class="fb-comments" data-href="http://www.tvx.com.sv/" data-height="320" data-width="400" data-numposts="5" data-colorscheme="light"></div>
              </div>
          </div> -->
      </div>
    </div>

    <div class="clearfix spacer"></div>
    
      <img src="img/JUEVES DE OPINION_BANNERTVX.jpg" class="centerImg" style='margin-top: 10px; max-width:1300px; margin-bottom:10px' alt="">

    <div class="container-fluid">
      <div class="row-fluid">
        
        <div class="col-sm-4 col-lg-5">
            <div id="twitter-feed"></div>
        </div>

        <div class="col-sm-12 col-lg-5">
              <div id="fb-root"></div>
              <div id="fbContainer">
                <div class="fb-comments" data-href="http://www.tvx.com.sv/" data-height="320" data-width="500px" data-numposts="5" data-colorscheme="light"></div>
              </div>
          </div>

        <div class="col-lg-2 hidden-sm hidden-xs hidden-md">
          <div class="col-sm-12">
            <ul class="pub-tvx-programas">
              <li><a href="http://www.tvx.com.sv/twd/" target="_blank"><img class="img-responsive" src="img/publicidad/TWD-CONCURSO-BANNER.jpg" alt=""></a></li>
              <li><a href="https://www.facebook.com/extravagando.tvx?fref=ts" target="_blank"><img class="img-responsive" src="img/publicidad/EV.jpg" alt=""></a></li>
              <li><a href="https://www.facebook.com/extravagando.tvx?fref=ts" target="_blank"><img class="img-responsive" src="img/publicidad/EV.jpg" alt=""></a></li>
              <li><a href="http://instagram.com/Canaltvx" target="_blank"><img class="img-responsive" src="img/publicidad/Instagram.jpg" alt=""></a></li>
              <li><a href="https://www.facebook.com/bumbampop.tvx?fref=ts" target="_blank"><img class="img-responsive" src="img/publicidad/BBP.jpg" alt=""></a></li>
              <li><a href="https://twitter.com/canaltvx" target="_blank"><img class="img-responsive" src="img/publicidad/Twitter.jpg" alt=""></a></li>
              <li><a href="https://www.facebook.com/zarezion.tvx?fref=ts" target="_blank"><img class="img-responsive" src="img/publicidad/ZZ.jpg" alt=""></a></li>
              <li><a href="http://www.youtube.com/user/CanalTVX" target="_blank"><img class="img-responsive" src="img/publicidad/Youtube.jpg" alt=""></a></li>
              <li><a href="https://www.facebook.com/ExpresaTVX?fref=ts" target="_blank"><img class="img-responsive" src="img/publicidad/EXPRESA.jpg" alt=""></a></li>

            </ul>
         </div>

         <div class="col-sm-12">
              <a href="http://www.tvx.com.sv/programacion" target="_blank"><img style="margin-top: 11px;" class="img-responsive" src="img/publicidad/programacion.jpg" alt=""></a>
         </div>
      </div> 

      </div>

    </div>

    <div class="clearfix spacer"></div>

    <div class="container-fluid">
      <div class="row-fluid">
      
      <div class="col-sm-6 col-lg-6">
        <div class="contenido">
          <h1>ExpresaTVX</h1>
          <div id="youtube-feed" data-plumtube data-plum-max-results=9 data-plum-show-title="link" data-plum-user="ExpresaTVX"><a href="//www.youtube.com/koryphaios">See all of Plum's videos.</a></div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-6">
        <div class="contenido">
          <h1>Instagram -  CanalTVX</h1>
            <div class="instagram tag"></div>
        </div>
      </div>
    
      </div>
    </div>

    <div class="clearfix spacer"></div>

    <div id="social-stream"></div>

    <!-- Footer  -->
    <nav class="navbar navbar-default navbar-fixed-bottom hidden-xs" id="footerBg">
      <div class="container-fluid">
          <div class="col-md-6" id="footerTws">
            
            <div id="tw-titulo">
              TWEETS DESTACADOS
              <img src="img/flecha.png" alt="">
            </div>

            <div id="tw-destacados">
              <p></p>
              <p></p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="" id="prog-slide">
              <div id="prog-titulo">
                EN  VIVO
                <img src="img/flecha.png" alt="">
              </div>

              <div class="prog-col prog-actual" id="prog-actual">
                <h1>Programa</h1>
                <p>Hora: 3:00 - 3:50PM</p>
              </div>
              <div id="prog-despues">
                DESPUÉS
                <img src="img/flecha.png" alt="">
              </div>
              <div class="prog-col" id="prog-mas">
                <h1>Programa</h1>
                <p>Hora: 3:50 - 4:50PM</p>
              </div>
            </div>
          </div>
      </div>
    </nav>
    <!-- /Footer  -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/jquery.social.stream.wall.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.social.stream.1.5.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script src="js/plumtube.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/twitterfeed.js"></script>
        
         <script>
            var _gaq=[['_setAccount','UA-45097795-4'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='http://www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
         </script>
    </body>
</html>
