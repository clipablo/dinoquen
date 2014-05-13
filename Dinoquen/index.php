<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
//Definiendo Variables: $ruta_p= Ruta hasta la plantillas | $ruta_s= Ruta del sitio
$ruta_p=JURI::base()."templates/".$this->template."/";
$ruta_s=JURI::base();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<script type="text/javascript">
var HyBaseUrl=('https:' == document.location.protocol ? 'https://' : 'http://') + 'happyseotools.com'+'/';
var _hy = _hy || [];
_hy.push(['id_website', 152]);
_hy.push(['track']);
(function() {
    var hy = document.createElement('script'); hy.type = 'text/javascript'; hy.async = true;
    hy.src = HyBaseUrl + 'js/hy.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hy, s);
})();
</script>
<head>
   
  <div id="articulo">
<jdoc:include type="modules" name="posicion10" style="none"/>
</div><!-- Fin de Estilo articulo1--> 
  
<meta content="Portal de los Dinosaurios de Neuquen todo lo quequerias saber y mas, ubicaciones de museos, tipos de Dinosaurios, Juegos, regalos y mas" name="description">
<meta name="keywords" content="dinosaurios neuquen, Neuquen, dinosaurios, chocon, dinoquen, Dinosaurios de la patagonia, patagonia, plaza huincul, proyecto dino, museo neuquen, giganotosaurio, huinculencis, dino, dinosauriso sudamericanos, argentina dinosaurios, argentina, el chocon, dinosaurios de argentina, dibuquen, giganotosaurio" />
<meta content="Neuquen, dinosaurios, chocon, dinoquen, Dinosaurios de la patagonia, patagonia, plaza huincul, proyecto dino, museo neuquen, giganotosaurio, huinculencis, dino, dinosaurios sudamericanos, argentina dinosaurios, argentina, el chocon" name="keywords">
<meta content="Argentina" name="Country">

<jdoc:include type="head" />
<!--Carga de Hojas de Estilo del Sistema-->
<link rel="stylesheet" href="<?php echo $ruta_s;?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $ruta_s;?>templates/system/css/general.css" type="text/css" />
<!--Carga de Hojas de Estilo de la Plantilla-->
<link rel="stylesheet" href="<?php echo $ruta_p; ?>css/template.css" type="text/css"/>
<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo $ruta_p."css/ie7.css" ?>" type="text/css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo $ruta_p."css/ie8.css" ?>" type="text/css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" href="<?php echo $ruta_p."css/ie9.css" ?>" type="text/css" />
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-28890719-1']);
  _gaq.push(['_setDomainName', 'dinoquen.com.ar']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<meta name="msvalidate.01" content="E2CCB5228191887525C02971145E376D" />
</head>
<body class="fondo">
<a href="<?php echo JURI::base(); ?>" id="logo" title="<?php echo $app->getCfg('sitename'); ?>">dinoquen</a>
<div id="topback"></div>
<div id="menu-principal">
<jdoc:include type="modules" name="posicion1" style="none"/>
</div> <!-- Fin de menu principal-->

<div id="contenido"class="clearfix">

<?php if($this->countModules('posicion3')) : ?>

<div id="articulo1">
<jdoc:include type="modules" name="posicion3" style="none"/>
</div><!-- Fin de Estilo articulo1--> 
<div id="col1">
<jdoc:include type="modules" name="posicion11" style="none"/>
</div><!-- Fin de Estilo col1-->

<?php else: ?>
<div id="principal">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
	
	</div><!-- Fin de Estilo principal-->
	
<div id="articulo3">
<jdoc:include type="modules" name="posicion11" style="none"/>
</div><!-- Fin de Estilo articulo--> 

<?php endif; ?>

</div><!-- Fin de Estilo contenido-->


 <div id="footer">
<jdoc:include type="modules" name="posicion6" style="none"/>
</div><!-- Fin de Estilo footer-->
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>

<!-- <pstyle="text-align: center;"><iframe src="https://www.google.com/calendar/embed?title=Calendario%20de%20Aniversarios%20de%20%20Neuquen&amp;showNav=0&amp;showPrint=0&amp;showTz=0&amp;height=270&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=dinoquen.com.ar%40gmail.com&amp;color=%23711616&amp;ctz=America%2FArgentina%2FBuenos_Aires" style=" border:solid 1px #777 " width="230" height="230" frameborder="0" scrolling="no"></iframe></p-->
<!-- <img class="skins_core_ImageNewSkin-image" skinpart="image" alt="dinoquen" src="http://www.dinoquen.com.ar/templates/Dinoquen/images/logo2.png" style="margin-top: 0px; margin-left: 0px; width: 382px; height: 202px;"
</head>
 <div id="slide">
  <jdoc:include type="modules" name="posicion2" style="none"/>
  </div><!Fin de Estilo slider-->