<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'info@plotterprint.com.bo, andres.16602@gmail.com'; 
		$subject = 'Mensaje Web Plotterprint';
		
		$body ="De: $name\n E-mail: $email\n\n Mensaje:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Por favor escribe tu nombre';
		}		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Por favor escribe un email valido';
		}		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Por favor escribe tu mensaje';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Por favor escribe la respuesta correcta';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    $class = "";
	if (mail ($to, $subject, $body, $headers)) {        
		$result='<span class="submission-success">Mensaje enviado! Te respondermos pronto.</span>';
        $class = 'class="hide"';
	} else {
		$result='<span class="submission-error">Hubo un error al enviar su mensaje. Por favor intenta denuevo.</span>';
	}
}
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Plotter Print &mdash; Contacto</title>
        <meta name="description" content="Ponte en contacto con Plotterprint! Te responderemos lo mas pronto posible.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/a.css">
        <link rel="icon" type="image/png" href="../favicon.png">
    </head>
    <body>

        <header>
            <nav>
                <a href="../" id="logo">
                    <img width="198" height="30" class="logo_bottom" src="../img/logo_hover.png">
                    <img width="198" height="30" class="logo_top" src="../img/logo.png">
                </a>

                <ul id="links">
                    <li id="inicio-remove"><a class="links-margin-right" href="../">Inicio</a></li>
                    <li><a class="links-margin-right" href="../servicios/">Servicios</a></li>
                    <li><a class="links-margin-right" href="../tips/">Tips</a></li>
                    <li><a class="links-margin-right" href="../ubicacion/">Ubicaci&oacute;n</a></li>
                    <li class="active">Contacto</li>
                </ul>
            </nav>
            <div id="subnav">
                <h1>Contacto</h1>
                <h2>Ponte en contacto con nosotros y con gusto te responderemos.</h2>
            </div>
        </header>

        <div id="main">
            <div class="contacto-intro">
                <p>Tel. 2797670 - Cel. 655-58322<br />
                email: <a href="mailto:info@plotterprint.com.bo">info@plotterprint.com.bo</a></p>                
                <p>Tambi&eacute;n puedes usar el formulario de contacto:</p>
            </div>

            <?php echo $result; ?>

            <form id="formsubmit" action="./" method="post" role="form" <?php echo $class ?>>
                <table>
                  <tr>
                    <td colspan="2">
    	                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre*" required maxlength="80" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<span class='text-danger'>$errName</span>";?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
    	                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail*" required maxlength="80" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<span class='text-danger'>$errEmail</span>";?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
    	                <textarea class="form-control" rows="4" id="message" name="message" placeholder="Mensaje*" required><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        <?php echo "<span class='text-danger'>$errMessage</span>";?>
                    </td>
                  </tr>
                  <tr>
                    <td>
    	                <label for="human" class="control-label">2 + 3 = ?</label>
                    </td>
                    <td>
    	                <input type="text" class="form-control" id="human" name="human" placeholder="Respuesta*" maxlength="2" required>
                        <?php echo "<span class='text-danger'>$errHuman</span>";?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
    	                <input id="submit" name="submit" type="submit" value="Enviar &rarr;" />
                    </td>
                  </tr>
                </table>
            </form>         

            <section class="hello-hours">
                <h1>Env&iacute;o de archivos</h1>
                <p>Si quieres mandarnos tus archivos por favor env&iacute;alos a: <a href="mailto:info@plotterprint.com.bo">info@plotterprint.com.bo</a>.<br> No te olvides incluir las instrucciones para tu impresi&oacute;n.</p>
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