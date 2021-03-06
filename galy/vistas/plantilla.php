<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Salon Galy Spa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="salon de belleza, Tratamientos Faciales, Masajes, Tratamientos Corporales, Manicura y Pedicura, Salon de belleza, salon , galy , galy spa" />
	<meta name="author" content="" />
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="salon de belleza | Tratamientos Faciales | Masajes | Tratamientos Corporales | Manicura y Pedicura | Salon de belleza"/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content="http://salongalyspa.com.mx/vistas/img/core-img/logo-galy.png"/>
	<meta property="og:site_name" content="Salon Galy Spa<"/>
	<meta property="og:description" content=""/>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="vistas/img/logo-galy.ico">



	<?php


		//echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';
		
		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();
    	$urlServidor = Ruta::ctrRutaServidor();


		require "../admin/admin/config.php";
		include "functions.php";

		$conexion = conexion($bd_config);
				// Obtenemos los post
		$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
		$posts2 = obtener_post($blog_config2['post_por_pagina2'], $conexion);



	?>
		


	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/animate.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.css.map">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/default-assets/classy-nav.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/jquery-ui.min.css">	
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/style.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/gulpfile.js">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/paginacion.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/main.css">	
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/util.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/afterbef.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/fonts/ElegantIcons.eot">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/fonts/ElegantIcons.svg">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/fonts/ElegantIcons.ttf">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/fonts/ElegantIcons.woff">
</head>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157713203-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157713203-1');
</script>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";
/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($rutas[0] == "index" || $rutas[0] == "blog" || $rutas[0] == "single-blog" || $rutas[0] == "contacto" || $rutas[0] == "nosotros" || $rutas[0] == "servicios" || $rutas[0] == "login" || $rutas[0] == "Instalaciones"){

		include "modulos/".$rutas[0].".php";

	}


	elseif ($rutas[0] == "Tratamientos-Faciales" || $rutas[0] == "Tratamientos-Corporales" || $rutas[0] == "Salon-belleza" || $rutas[0] == "Masajes" || $rutas[0] == "Manicura-Pedicura" || $rutas[0] == "cuarto-spa2" || $rutas[0] == "salon-360" || $rutas[0] == "cuarto-spa1" || $rutas[0] == "cuarto-spa3") {
		include "modulos/servicios/".$rutas[0].".php";
	}


	else{

		include "modulos/error404.php";

	}

}else{
	
	include "modulos/inicio.php";

}
	include "modulos/footer.php";
?>


    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!--=====================================
BOTON FLOTANTE
======================================-->


<script type="text/javascript" style="">
    (function () {
        var options = {
            facebook: "1959701580752883", // Facebook page ID
            whatsapp: "+52 1 55 22 40 65 79", // WhatsApp number
            email: "salongalyspa@gmail.com", // Email
            sms: "5544320116", // Sms phone number
            call: "5544320116", // Call phone number
            company_logo_url: "", // URL of company logo (png, jpg, gif)
            greeting_message: "", // Text of greeting message
            call_to_action: "Cotiza ahora", // Call to action
            wa_vb_message: "", // Message for WhatsApp
            button_color: "#097A88", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>


 <!--=================================
 back to top -->

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->


    <script src="<?php echo $url; ?>vistas/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="<?php echo $url; ?>vistas/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $url; ?>vistas/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="<?php echo $url; ?>vistas/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="<?php echo $url; ?>vistas/js/default-assets/active.js"></script>

    <script src="<?php echo $url; ?>vistas/js/main.js"></script>

    <script src="<?php echo $url; ?>vistas/js/map-custom.js"></script>



</body>
</html>