<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Control Distribuido</title>
	<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <script>
	function buscarPalabras()
		{
		var buscaAjax;
		if(window.XMLHttpRequest)
		{
		    buscaAjax = new XMLHttpRequest();
		}else{
		    buscaAjax = new ActiveXOject("Microsoft.XMLHTTP");
		    }
		    buscaAjax.onreadystatechange = function(){
		        if(buscaAjax.readyState==4 && buscaAjax.status==200){
		            document.getElementById('resultado').innerHTML = buscaAjax.responseText;
		            }
		        }
		        var dato = document.form1.palabra.value;
		        buscaAjax.open("GET","config.php?variable="+dato,true);
		        buscaAjax.send();
		}
    </script> 
</head>
<body>
	<header>
		<div class="contenedor" align="center">
			<figure id="logoImg">
				<h2 style="color:white">CONTROL DISTRIBUIDO</h2>
			</figure>
			<nav>
				<ul>
					<li><a href="#scroll_infinito">INICIO</a></li>
					<li><a href="#noticias">NOTICIAS</a></li>
					<li><a href="#galeria">GALERIA</a></li>
					<li><a href="#cultivate">NATURALEZA</a></li>
					<li>
						<form name="form1" method="post">
							<input type="text" name="palabra" size="20" placeholder="Escribe aqui"> 
							<input type="button" name="buscar" value="Buscar" style="font-size:1em;margin-left:-4px;border:none;background:#FFCD1A;color:white;" onClick="buscarPalabras()">
						</form>
					</li>
				</ul>
			</nav>
		</div>
	</header>
<div id="scroll_infinito">
	<div id="resultado">
		Ingrese una palabra en el buscador
	</div>
	<section id="contenidos">
		<div class="contenedor">
			<section id="principal">
				<article class="cat doble principal">
					<canvas id="locoalien"></canvas>
					<a href="#">
						<span class="categoria">Categoria</span>
						<h3>Bienvenidos</h3>
					</a>
				</article>
				<article class="rev unos principal">
					<span class="categoria">Revista</span>
					<img src="images/daftpunk.png" alt="">
				</article>
			</section>
			<section id="noticias" class="categorias">
				<article class="unos cat" >
					<a href="#" style="background-image: url('images/camaro6.png')">
						<span class="categoria">Categoria</span>
						<h3>Camaro Tuning</h3>
					</a>
					<span class="fecha">31 Oct 2013</span>
					<p>Lorem ipsum dolor sit amet, camaro tuning consectetur adipisicing elit. Quo, excepturi, aspernatur.</p>
				</article>
				<article class="unos cat" >
					<a href="#" style="background-image: url('images/camaro2.png')">
						<span class="categoria">Categoria</span>
						<h3>Camaro Coupé</h3>
					</a>
					<span class="fecha">31 Oct 2013</span>
					<p>El Camaro Coupé 2014 refina su diseño atrevido e inconfundible, con toques aerodinámicos para que sigas disfrutando del poder, desempeño y buen estilo que sólo Camaro tiene.</p>
				</article>
				<article id="formu" class="unos">
					Aqui debe ir el Formulario
				</article>
			</section>
			<section class="categorias">
				<article class="unos art" >
					<a href="#" style="background-image: url('images/camaro4.png')">
						<span class="categoria">
							Categoria 
							<span class="fecha">
								31 Oct 2013 07:11
								<span class="comNum">7</span>
							</span>
						</span>
						<span class="infoUnos">
							<h3>Camaro Convertible</h3>
							<p>Un clásico con un diseño sorprendente, tanto que el viento te alborotará el cabello mientras aceleras por la carretera. Todo esto parece increíble, pero un Camaro convertible no se compra por su nombre y ni por el viento. Se compra por lo que está debajo del cofre, un motor V8 de 6.2L con 400 caballos de fuerza.</p>
						</span>
					</a>
				</article>
				<article class="doble art" >
					<a class="thumb"href="#" style="background-image: url('images/camaro5.png')">
					</a>
					<div class="info">
						<h3>Bumblebee</h3>	
						<span class="fecha">31 Oct 2013 07:11</span>
						<p>Bumblebee, alguna vez denominado Hotshot, es un personaje ficticio perteneciente al universo Transformers.</p>
						<p>Es llamado el “pequeño hermano” de los Autobots, esforzándose constantemente para probar que esta a la altura de los otros (especialmente de Optimus Prime), aunque esto signifique en ocasiones colocarse en peligro.
						Su formato alternativo en las series animadas, es un Volkswagen Beetle amarillo.</p>
					</div>
				</article>
			</section>
			<div id="galeria" class="tres">
				<a href="#"><img src="images/camaro7.png" alt=""></a>
			</div>		
			<section class="categorias">
				<article class="unos cat" >
					<a href="#" style="background-image: url('images/camaro9.png')">
						<span class="categoria">Categoria</span>
						<h3>Camaro Tron</h3>
					</a>
					<span class="fecha">31 Oct 2013</span>
					<p>Lorem ipsum dolor sit amet, camaro tron consectetur adipisicing elit. Quo, excepturi, aspernatur.</p>
				</article>
				<article class="unos cat" >
					<a href="#" style="background-image: url('images/camaro10.png')">
						<span class="categoria">Categoria</span>
						<h3>Camaro Monster Energy</h3>
					</a>
					<span class="fecha">31 Oct 2013</span>
					<p>Lorem ipsum dolor sit amet, camaro monster energy consectetur adipisicing elit. Quo, excepturi, aspernatur.</p>
				</article>
				<article id="formu" class="unos">
					Aqui debe ir el Formulario
				</article>
			</section>
			<div id="cultivate" class="tres">
				<a href="#"><img src="images/banner.gif" alt=""></a>
			</div>
			<section class="categorias">
				<article class="unos art" >
					<a href="#" style="background-image: url('images/paisaje1.png')">
						<span class="categoria">
							Categoria 
							<span class="fecha">
								31 Oct 2013 07:11
								<span class="comNum">7</span>
							</span>
						</span>
						<span class="infoUnos">
							<h3>TÍTULO NOTA</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorum iure quis omnis deleniti nemo voluptas nesciunt! Eius facilis beatae dicta magni impedit iusto quam dolor doloribus. Esse, amet, similique.</p>
						</span>
					</a>
				</article>
				<article class="unos art" >
					<a href="#" style="background-image: url('images/paisaje2.png')">
						<span class="categoria">
							Categoria 
							<span class="fecha">
								31 Oct 2013 07:11
								<span class="comNum">7</span>
							</span>
						</span>
						<span class="infoUnos">
							<h3>TÍTULO NOTA</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorum iure quis omnis deleniti nemo voluptas nesciunt! Eius facilis beatae dicta magni impedit iusto quam dolor doloribus. Esse, amet, similique.</p>
						</span>
					</a>
				</article>
				<article class="unos art" >
					<a href="#" style="background-image: url('images/paisaje3.png')">
						<span class="categoria">
							Categoria 
							<span class="fecha">
								31 Oct 2013 07:11
								<span class="comNum">7</span>
							</span>
						</span>
						<span class="infoUnos">
							<h3>TÍTULO NOTA</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorum iure quis omnis deleniti nemo voluptas nesciunt! Eius facilis beatae dicta magni impedit iusto quam dolor doloribus. Esse, amet, similique.</p>
						</span>
					</a>
				</article>
			</section>
		</div>
	</section>
</div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/scroll_infinito.js"></script>
<script type="text/javascript" src="js/matrix.js"></script>
<script type="text/javascript" src="js/ancla.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
        $( '#scroll_infinito' ).scrollLoad({
            url : 'contenido.php',
            start : function() {
                $('<div class="loading"><img src="images/spinner.gif"/></div>').appendTo(this);
            },
            ScrollAfterHeight : 95,
            onload : function( data ) {
                $(this).append( data );
                $('.loading').remove();
            },
        });
    });
</script>
</html>