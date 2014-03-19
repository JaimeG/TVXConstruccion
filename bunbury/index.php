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
                                      'message' => '1 2 3 probando 1 2 3 no probando :O',
                                      'picture' => 'http://tvx.com.sv/bunbury/images/logobunbury.png'
                                 ));
        ?>

	<img src="images/logobunbury.png" alt="">

    <h1> ACA VA EL FORMULARIO CUANDO ESTE ACTIVO</h1>
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
        			<img src="http://tvx.com.sv/img/1.jpg" alt="">
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
     			<img src="http://tvx.com.sv/img/1.jpg" alt="">
     			<br>
     			<a href="<?php echo $login_url ?>">entra</a>
     		</div>
      <?php


    } 

?>




</body>
</html>
