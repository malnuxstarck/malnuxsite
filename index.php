<!DOCTYPE html>
   <html>
        <head>
		      <title title="Bienvenue chez Malnux"> Malnux Starck / Un Informaticien Accro </title>
			  <meta charset="UTF-8"/>
			  <meta name="author" content="Malnux"/>
			  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scale=yes"/>
			  <link rel="stylesheet" type="text/css" href="style.css"/>
			  <link rel="shortcut icon" href="images/boy1.ico"/>
			  <link rel="icon" type="image/png" href="images/boy12.png"/>
		</head>
		
		<body>
		     <div id="blockpage">	
		             <?php
			        include("header.php");
			         ?>
					<div id="contenu">		 
						<div id="message">
										<h2> Presentation </h2>
										<p>
										    Bonjour ou bonsoir, Je m'appelle <strong>Abdoul Malik</strong> plus connu sous le nom  de <strong>Malnux Starck</strong> sur le net.
											Je suis <strong>développeur Full Stack</strong>, et <strong> Se débrouille en Design</strong>.
											Jeune Informaticien passionné des nouvelles technologies d'information et du Web. 
											je parcours les forums du Web pour aider les personnes ayant besoin d'aide. 
											Je cherche aussi des nouvelles méthodes et astuces afin de perfectionner ma technique et façonné mon apprentissage.
									 
										</p>
						</div>		 
								 
						<div id="presentation">
									<div id="p_image">
											   
											   
											   
									</div>						  
								<h1> Abdoul Malik </h1>
								<p>
								  Je suis curieux (passionné) de toutes les technologies en rapport avec l'informatique.
								</p>					
						</div>
						
						<div id="contact">
							<h2> M'envoyé un mail </h2>
							<form method="POST" action="postmessage.php">
								<p> 
								 <input type="text" name="prenom" placeholder="Prenom" maxlength="20" required/>
								</p> 
								
								<p>
								<input type="email" name="email" placeholder="Votre Email" required/>
								</p>
								<p>
								<textarea name="message" placeholder="Le message" required></textarea>
								<p>
								
								<p>
								  <input type="submit" Value="Envoyer">
								</p>
							
						
						   </form>
						</div>
						
						<div id="systemedexploitation">
						    <h2> Mes Os </h2>
							<nav>
								   
								<ul>	 
									   <li>Windows 7</li>
									   <li>Ubuntu</li>
									   <li>Mac Os X</li>
								</ul>
							</nav>
						</div>
						
						<div id="date">
						     
						   <div id="datei">
						         <?php include('date.php'); ?>
								<h2> <?php echo $jour_lettre; ?> </h2>
									<p>
									  <?php echo $jour_chiffre; ?>
									</p>
									<h3> <?php echo $mois_lettre; ?> </h3>
							 </div>
								  
						</div>        
						
						<div id="mesuivre">
						    <h2> Me suivre </h2>
							
								<ul id="social">
									<li>
									    
									   <a href="https://www.facebook.com/abdoulmalikhamidou"><span id="facebook"></span>Facebook</a>
									
									</li>
									
									<li>
									   
									   <a href="https://twitter.com/AbdoulMalikH"><span id="twitter"></span>Twitter</a>
									
									</li>
									
									<li>
									    
									   <a href="https://github.com/malnuxstarck"><span id="github"></span>Github</a>
									
									</li>
								
								</ul>
							 
						</div>
					</div>
		     <?php
			     include("footer.php");
			   ?> 
			</div> 
	   </body>
   </html>