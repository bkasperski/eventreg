<? require_once 'engine/load.php'; ?>
<? $year=date("Y"); ?>
<!DOCTYPE html>
<html>
<head>
	
	<title><? tytul() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1, maximum-scale=1"><meta name="robots" content="index,follow">
	<link href="/events/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/file/css/main.css" media="screen">
	<script src="/template/jquery.min.js"></script>
	<link rel="stylesheet" href="/template/normalize.css">
	<link href="/template/jquery.bxslider.css" rel="stylesheet">
	<link rel="stylesheet" href="/template/style.css">
	<link rel="stylesheet" href="/events/styles.css">
	
	<!--script src="http://use.typekit.net/xsb0bgo.js"></script><script>try{Typekit.load();}catch(e){}</script--><script type="text/javascript" src="/file/js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/file/js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen">
	<script src="/file/js/main.js"></script>
</head>
<body class="newpage modnew_rewrite__pl/rejestrator subpage">

			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.3&appId=147245258700961";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, "script", "facebook-jssdk"));</script>	
			<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18932293-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

			
<header class="top clearfix logopng">
	<div class="logo">
		<a href="/"><img src="/template/images/logo.png" alt="Integart – media do druku wielkoformatowego, drukarki latexowe i UV"></a>
	</div>
	<div class="right">
	<div class="clearfix">
		<p class="lang"><a href="/en" class="en">English</a></p>
		<form method="get" action="/szukaj"><input value="" name="s" type="text" placeholder="szukaj w serwisie"><input type="submit" value="Szukaj"></form>
	</div>
	<nav>
	<ul>
        <li class="Element-2"><a target="_self" href="/pl/o-firmie">O firmie</a></li>
        <li class="Element-3"> <a target="_self" href="/pl/aktualnosci">Aktualności</a></li>
        <li class="Element-5"><a target="_self" href="/pl/oferta">Oferta</a></li>
        <li class="Element-87 act"><a target="_self" href="/events/">Events</a></li>
        <li class="Element-4"><a target="_self" href="/pl/referencje">Referencje</a></li>
        <li class="Element-6"><a target="_self" href="/pl/kontakt">Kontakt</a></li>
    </ul>
	</nav>
	</div>
</header>
<div class="advert-slider">
	<section class="intro">
		<div class="Banner_Place Banner_Place17 Banner_Sid17-1">
			<img width="883" height="242" src="/events/b_registration.jpg" alt=""></div></section></div><section class="content clearfix">
			<article class="setmod2">
				<div id="content-box">
					<? content(); ?>	
				</div>
			</article>				
			<aside>
				<nav>
					<ul>
                        <li class="Element-2"><a target="_self" href="/pl/o-firmie">O firmie</a></li>
                        <li class="Element-3"><a target="_self" href="/pl/aktualnosci">Aktualności</a></li>
                        <li class="Element-5"><a target="_self" href="/pl/oferta">Oferta</a></li>
                        <li class="Element-87 act"><a target="_self" href="/events/">Events</a></li>
                        <li class="Element-4"><a target="_self" href="/pl/referencje">Referencje</a></li>
                        <li class="Element-6"><a target="_self" href="/pl/kontakt">Kontakt</a></li>
                    </ul>

				</nav>			
				<div class="Banner_Place Banner_Place19 Banner_Sid19-69">
					<a target="_self" href="/reklama/66/klik"><img width="200" height="246" src="/file/c/image/portfolio200246.jpg" alt=""></a>
				</div>
			</aside>			
	</section>
	<footer class="clearfix">		
		<div class="right">
			<div class="clearfix">
				<a href="/" class="logo"><img src="/template/images/logo.png" alt="Integart"></a>
			</div>
			<div class="social clearfix">
				<a target="_blank" href="https://www.facebook.com/hp.latex.integart/"><img src="/template/images/fb.png" alt=""></a>
				<a target="_blank" href="http://www.youtube.com/c/IntegartTV"><img src="/template/images/yt.png" alt=""></a>
				<a target="_blank" href="https://twitter.com/hplatexintegart"><img src="/file/uploads/grafika2/twitter.jpg" alt=""></a>
			</div>			
			<div class="copy">
				<p>Copyright &copy; 2011 - <? echo $year;?> INTEGART</p>
			</div>
		</div>	
	</footer>	
	<script src="/template/jquery.bxslider.min.js"></script>
	<script src="/template/custom.js"></script>
	<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1070530428;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1070530428/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>  	  