<!doctype html>
<html lang="es-bo">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Plotter Print &mdash; Bienvenido</title>
        <meta name="description" content="Bienvenido a la página de Plotter Print, La Paz - Bolivia. Impresión de planos arquitectónicos y fotografía.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/a.css">
        <link rel="icon" type="image/png" href="favicon.png">
    </head>
    <body>

        <header>
            <nav>
                <a href="./" id="logo">
                    <img alt="Inicio" width="198" height="30" class="logo_bottom" src="img/logo_hover.png">
                    <img alt="Inicio" width="198" height="30" class="logo_top" src="img/logo.png">
                </a>

                <ul id="links">
                    <li id="inicio-remove" class="active links-margin-right">Inicio</li>
                    <li><a class="links-margin-right" href="servicios/">Servicios</a></li>
                    <li><a class="links-margin-right" href="tips/">Tips</a></li>
                    <li><a class="links-margin-right" href="ubicacion/">Ubicaci&oacute;n</a></li>
                    <li><a href="contacto/">Contacto</a></li>                  
                </ul>
            </nav>
            <div id="subnav">
                <h1>Bienvenido a la p&aacute;gina de Plotter Print!</h1>
                <h2>Impresiones en formato ancho para estudiantes, arquitectos, ingenieros, fot&oacute;grafos, dise&ntilde;adores y entusi&aacute;stas gr&aacute;ficos.</h2>
            </div>
        </header>

        <div id="main">
            <div id="servicios-mini">
                <a href="servicios/" id="servicios-mini-bg">
                    <span class="title-mini">Servicios</span><br />
                    <span class="subtitle-mini">Conoce nuestros servicios</span>
                </a>                
            </div>

            <div id="tips-mini">
                <a href="tips/" id="tips-mini-bg">
                    <span class="title-mini">Tips</span><br />
                    <span class="subtitle-mini">Consejos &uacute;tiles para tus archivos</span>
                </a>                
            </div>

            <div id="ubicacion-mini">
                <a href="ubicacion/" id="ubicacion-mini-bg">
                    <span class="title-mini">Ubicaci&oacute;n</span><br />
                    <span class="subtitle-mini">Donde nos encontramos</span>
                </a>                
            </div>

            <div id="contacto-mini">
                <a href="contacto/" id="contacto-mini-bg">
                    <span class="title-mini">Contacto</span><br />
                    <span class="subtitle-mini">Ponte en contacto con nosotros</span>
                </a>                
            </div>

            <section class="hello-servicios hello-margin">
                <a href="servicios/">
                    <img alt="Servicios" width="398" height="238" src="img/hello_servicios.jpg" />
                    <span class="overlay-servicios">
                        <span class="hello-world-title">Servicios</span>
                        <span class="hello-world-subtitle">Conoce nuestros servicios</span>
                    </span>                    
                </a>
            </section>

            <section class="hello-tips">
                <a href="tips/">
                    <img alt="Tips" width="398" height="238" src="img/hello_tips.jpg" />
                    <span class="overlay-tips">
                        <span class="hello-world-title">Tips</span>
                        <span class="hello-world-subtitle">Consejos &uacute;tiles para tus archivos</span>
                    </span>                    
                </a>
            </section>

            <section class="hello-location hello-margin">
                <a href="ubicacion/">
                    <img alt="Mapa" width="398" height="238" src="img/hello_mapa.jpg" />
                    <span class="overlay-location">
                        <span class="hello-world-title">Ubicaci&oacute;n</span>
                        <span class="hello-world-subtitle">Donde nos encontramos</span>
                    </span>                    
                </a>
            </section>

            <section class="hello-contact">
                <a href="contacto/">
                    <img alt="Contacto" width="398" height="238" src="img/hello_contact.jpg" />
                    <span class="overlay-contact">
                        <span class="hello-world-title">Contacto</span>
                        <span class="hello-world-subtitle">Ponte en contacto con nosotros</span>
                    </span>                    
                </a>
            </section>

            <div class="clearfix"></div>

            <img width="862" height="485" class="hello-intro" src="img/intro_b.jpg" alt="Bienvenido a nuestro local">
            
            <section class="hello-hours">
                <h1>Horarios de atenci&oacute;n</h1>
                <span>Lunes a Viernes: 8:30am a 7pm  /  S&aacute;bados: 9am a 1pm</span>
            </section>            
            
        </div>

        <footer>
            &copy; <?php echo date("Y") ?> Plotter Print. La Paz, Bolivia.
        </footer>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-67141310-1','auto');ga('send','pageview');
        </script>
    </body>
</html>