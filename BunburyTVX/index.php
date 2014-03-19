<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('../facebook-php-sdk/facebook.php');

  $config = array(
    'appId' => '672474256150884',
    'secret' => '570b2013d25ef7f030a8dc40be5eb429',
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
?>

<!DOCTYPE html>
<html>
<head>

<title>
TVX - Concurso Enrique Bunbury
</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">
<link href='http://fonts.googleapis.com/css?family=Ruda:400,700' rel='stylesheet' type='text/css'>

<!-- CSS -->
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="scripts/wufoo.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="public">

<?php
	if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {
        $ret_obj = $facebook->api('/me/feed', 'POST',
                                    array(
                                      'link' => 'www.tvx.com.sv',
                                      'message' => '1 2 3 probando',
                                      'picture' => 'http://tvx.com.sv/bunbury/images/logobunbury.png'
                                 ));
        ?>

	<img src="images/logobunbury.png" alt="">

	<div id="container" class="ltr">

	<form id="form1" name="form1" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
	      action="https://bunburytvx.wufoo.com/forms/zgfydo00v172m0/#public">
	  
	<header id="header" class="info">
	<h2>Concurso Enrique Bunbury</h2>
	<div>Ganá entradas VIP y General para el concierto de Enrique Bunbury este 22 de marzo en el Gimnasio Nacional.</div>
	</header>

	<ul>

	<li id="foli8" class="notranslate      ">
	<label class="desc" id="title8" for="Field8">
	Nombre Completo
	<span id="req_8" class="req">*</span>
	</label>
	<span>
	<input id="Field8" name="Field8" type="text" class="field text fn" value="" size="8" tabindex="1" required />
	<label for="Field8">Nombre</label>
	</span>
	<span>
	<input id="Field9" name="Field9" type="text" class="field text ln" value="" size="14" tabindex="2" required />
	<label for="Field9">Apellidos</label>
	</span>
	</li>
	<li id="foli7" class="notranslate      ">
	<label class="desc" id="title7" for="Field7">
	Correo electrónico
	<span id="req_7" class="req">*</span>
	</label>
	<div>
	<input id="Field7" name="Field7" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="3" required /> 
	</div>
	<p class="instruct" id="instruct7"><small>A esta dirección de correo te contactaremos si logras ser uno de los ganadores.</small></p>
	</li><li id="foli10" class="notranslate section      ">
	<section>
	<h3 id="title10">
	Preguntas
	</h3>
	<div id="instruct10">Para optar a las entradas Preferenciales debés tener un mínimo de 3 respuestas correctas. <br />
	Para optar por las entradas VIP debés contestar correctamente todas las preguntas. <br />
	¡Suerte!</div>
	</section>
	</li><li id="foli1" class="notranslate      ">
	<fieldset>
	<![if !IE | (gte IE 8)]>
	<legend id="title1" class="desc">
	¿Cuál es el nombre real de Enrique Bunbury?
	<span id="req_1" class="req">*</span>
	</legend>
	<![endif]>
	<!--[if lt IE 8]>
	<label id="title1" class="desc">
	¿Cuál es el nombre real de Enrique Bunbury?
	<span id="req_1" class="req">*</span>
	</label>
	<![endif]-->
	<div>
	<input id="radioDefault_1" name="Field1" type="hidden" value="" />
	<span>
	<input id="Field1_0" name="Field1" type="radio" class="field radio" value="Enrique Ortiz de Land&aacute;zuri Yzarduy" tabindex="4" checked="checked" required />
	<label class="choice" for="Field1_0" >
	Enrique Ortiz de Landázuri Yzarduy</label>
	</span>
	<span>
	<input id="Field1_1" name="Field1" type="radio" class="field radio" value="Enrique Ortiz de Yzarduy Land&aacute;zuri" tabindex="5" required />
	<label class="choice" for="Field1_1" >
	Enrique Ortiz de Yzarduy Landázuri</label>
	</span>
	</div>
	</fieldset>
	<p class="instruct" id="instruct1"><small>Pista N° 1: ME LLAMO BUNBURY, PERO TAMBIÉN ENRIQUE<br />
	</small></p>
	</li><li id="foli2" class="notranslate      ">
	<fieldset>
	<![if !IE | (gte IE 8)]>
	<legend id="title2" class="desc">
	¿Cuál fue la primera banda en la que cantó Enrique Bunbury?
	<span id="req_2" class="req">*</span>
	</legend>
	<![endif]>
	<!--[if lt IE 8]>
	<label id="title2" class="desc">
	¿Cuál fue la primera banda en la que cantó Enrique Bunbury?
	<span id="req_2" class="req">*</span>
	</label>
	<![endif]-->
	<div>
	<input id="radioDefault_2" name="Field2" type="hidden" value="" />
	<span>
	<input id="Field2_0" name="Field2" type="radio" class="field radio" value="Zumo de Vidrio" tabindex="6" checked="checked" required />
	<label class="choice" for="Field2_0" >
	Zumo de Vidrio</label>
	</span>
	<span>
	<input id="Field2_1" name="Field2" type="radio" class="field radio" value="Rebel Waltz" tabindex="7" required />
	<label class="choice" for="Field2_1" >
	Rebel Waltz</label>
	</span>
	</div>
	</fieldset>
	<p class="instruct" id="instruct2"><small>Pista N° 2: COMENCÉ SIENDO CANTANTE Y TAMBIÉN BAJISTA</small></p>
	</li><li id="foli3" class="notranslate      ">
	<fieldset>
	<![if !IE | (gte IE 8)]>
	<legend id="title3" class="desc">
	¿Cuántas veces ha visitado El Salvador?
	<span id="req_3" class="req">*</span>
	</legend>
	<![endif]>
	<!--[if lt IE 8]>
	<label id="title3" class="desc">
	¿Cuántas veces ha visitado El Salvador?
	<span id="req_3" class="req">*</span>
	</label>
	<![endif]-->
	<div>
	<input id="radioDefault_3" name="Field3" type="hidden" value="" />
	<span>
	<input id="Field3_0" name="Field3" type="radio" class="field radio" value="2 (1996 y 1998)" tabindex="8" checked="checked" required />
	<label class="choice" for="Field3_0" >
	2 (1996 y 1998)</label>
	</span>
	<span>
	<input id="Field3_1" name="Field3" type="radio" class="field radio" value="3 (1996, 1998, 1999)" tabindex="9" required />
	<label class="choice" for="Field3_1" >
	3 (1996, 1998, 1999)</label>
	</span>
	</div>
	</fieldset>
	<p class="instruct" id="instruct3"><small>Pista N°3: EL SALVADOR ME HA ENAMORADO DOBLEMENTE</small></p>
	</li><li id="foli4" class="notranslate      ">
	<fieldset>
	<![if !IE | (gte IE 8)]>
	<legend id="title4" class="desc">
	¿Qué país inspiró a Bunbury a escribir "El Viaje a Ninguna Parte"?
	<span id="req_4" class="req">*</span>
	</legend>
	<![endif]>
	<!--[if lt IE 8]>
	<label id="title4" class="desc">
	¿Qué país inspiró a Bunbury a escribir "El Viaje a Ninguna Parte"?
	<span id="req_4" class="req">*</span>
	</label>
	<![endif]-->
	<div>
	<input id="radioDefault_4" name="Field4" type="hidden" value="" />
	<span>
	<input id="Field4_0" name="Field4" type="radio" class="field radio" value="Argentina" tabindex="10" checked="checked" required />
	<label class="choice" for="Field4_0" >
	Argentina</label>
	</span>
	<span>
	<input id="Field4_1" name="Field4" type="radio" class="field radio" value="Nicaragua" tabindex="11" required />
	<label class="choice" for="Field4_1" >
	Nicaragua</label>
	</span>
	</div>
	</fieldset>
	<p class="instruct" id="instruct4"><small>Pista N° 4: CENTROAMÉRICA ME HA INSPIRADO</small></p>
	</li><li id="foli6" class="notranslate      ">
	<fieldset>
	<![if !IE | (gte IE 8)]>
	<legend id="title6" class="desc">
	¿A qué edad compuso la canción "Maldito Duende"?
	<span id="req_6" class="req">*</span>
	</legend>
	<![endif]>
	<!--[if lt IE 8]>
	<label id="title6" class="desc">
	¿A qué edad compuso la canción "Maldito Duende"?
	<span id="req_6" class="req">*</span>
	</label>
	<![endif]-->
	<div>
	<input id="radioDefault_6" name="Field6" type="hidden" value="" />
	<span>
	<input id="Field6_0" name="Field6" type="radio" class="field radio" value="17 a&ntilde;os" tabindex="12" checked="checked" required />
	<label class="choice" for="Field6_0" >
	17 años</label>
	</span>
	<span>
	<input id="Field6_1" name="Field6" type="radio" class="field radio" value="14 a&ntilde;os" tabindex="13" required />
	<label class="choice" for="Field6_1" >
	14 años</label>
	</span>
	</div>
	</fieldset>
	<p class="instruct" id="instruct6"><small>Pista N° 5: YO ESCRIBÍA DESDE ANTES DE MIS 15</small></p>
	</li><li id="foli5" class="notranslate      ">
	<fieldset>
	<![if !IE | (gte IE 8)]>
	<legend id="title5" class="desc">
	En la canción "Opio" ¿de qué poeta se incluyen versos?
	<span id="req_5" class="req">*</span>
	</legend>
	<![endif]>
	<!--[if lt IE 8]>
	<label id="title5" class="desc">
	En la canción "Opio" ¿de qué poeta se incluyen versos?
	<span id="req_5" class="req">*</span>
	</label>
	<![endif]-->
	<div>
	<input id="radioDefault_5" name="Field5" type="hidden" value="" />
	<span>
	<input id="Field5_0" name="Field5" type="radio" class="field radio" value="Mario Benedetti" tabindex="14" checked="checked" required />
	<label class="choice" for="Field5_0" >
	Mario Benedetti</label>
	</span>
	<span>
	<input id="Field5_1" name="Field5" type="radio" class="field radio" value="Jorge Luis Borges" tabindex="15" required />
	<label class="choice" for="Field5_1" >
	Jorge Luis Borges</label>
	</span>
	</div>
	</fieldset>
	<p class="instruct" id="instruct5"><small>Pista N° 6: DISFRUTO LA POESÍA URUGUAYA</small></p>
	</li>

	 <li class="buttons ">
	<div>

	                    <input id="saveForm" name="saveForm" class="btTxt submit" 
	    type="submit" value="Enviar"
	 /></div>
	</li>

	<li class="hide">
	<label for="comment">Do Not Fill This Out</label>
	<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
	<input type="hidden" id="idstamp" name="idstamp" value="OM4SvnI+Xlh/aCkp9k5J+w6XXdZB23XThKtg5CNYO3o=" />
	</li>
	</ul>
	</form> 

	</div><!--container-->


<?php
      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl( array(
                       'scope' => 'publish_stream'
                       )); 
        ?>
        		<div>
        			Aqui podes personalizar la cuestion del login
        			<br>
        			<img src="http://i0.kym-cdn.com/photos/images/newsfeed/000/581/296/c09.jpg" alt="">
        			<br>
        			<a href="<?php echo $login_url ?>">entra</a>
        		</div>
        <?php
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, so print a link for the user to login
      // To post to a user's wall, we need publish_stream permission
      // We'll use the current URL as the redirect_uri, so we don't
      // need to specify it here.
      $login_url = $facebook->getLoginUrl( array( 'scope' => 'publish_stream' ) );
      ?>
     		<div>
     			Aqui podes personalizar la cuestion del login
     			<br>
     			<img src="http://i0.kym-cdn.com/photos/images/newsfeed/000/581/296/c09.jpg" alt="">
     			<br>
     			<a href="<?php echo $login_url ?>">entra</a>
     		</div>
      <?php


    } 

?>




</body>
</html>
