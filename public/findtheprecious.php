<?php include 'form.php';?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Lucas Thauvin">
		<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat.">
		<title>FindThePrecious</title>
		<link rel="stylesheet" href="findThePrecious.css"/>
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1 class="main_title"><a href="#" title="FindThePrecious">FindThePrecious.com</a></h1>
		</header>
		<div id="banniere" class="banner">
			<div class="banner_content">
				<h2>Dangerous fellowship try to destroy the ring</h2>
				<h3>Orcs, Goblins, Balrogs, protect your master Sauron</h3>
			</div>
		</div>
		<section id="fellows" class="fellows">
			<h2>Fellows wanted dead or alive</h2>
			<div class="fellows_content">
				<div class="wanted_people">
					<img src="https://via.placeholder.com/220x150" alt="Lorem ipsum dolor sit amet" class="img_center">
					<div class="reward">
						<h4>Reward 1000 gold coins</h4>
					</div>
					<h3>The Wizard</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="wanted_people">
					<div class="dead">
						<div class="dead_abs"></div>
						<img src="https://via.placeholder.com/220x150" alt="Lorem ipsum dolor sit amet" class="img_center">
					</div>
					<h3>Hobbit #3</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="wanted_people">
					<img src="https://via.placeholder.com/220x150" alt="Lorem ipsum dolor sit amet" class="img_center">
					<div class="reward">
						<h4>Reward 250 gold coins</h4>
					</div>
					<h3>Yummy Dwarf</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</section>

		<section class="join">
			<div class="join_content">
				<h2>We need you !</h2>
				<button>Join our army</button>
			</div>
		</section>



		<section id="contact" class="contact">
			<div class="contact_content">
					<h2>Contact us</h2>
                    <div class="error_report">
                        <ul>
                            <?php $champs = ['email','name', 'tel', 'selection', 'message'];
                            foreach ($champs as $champ) {
                                if (!empty($errors[$champ])) {
                                    foreach ($errors[$champ] as $error) { ?>
                                        <li><?= $error ?></li>
                                    <?php }
                                }
                            }
                            ?>
                        </ul>
                    </div>
					<form action="findtheprecious.php" id="contact_form" method="post" >
						<div class="form_content">
							<label for="mail">Email :</label>
							<input type="email" id="mail" name="email">
						</div>

						<div class="form_content">
							<label for="name">Name :</label>
							<input type="text" id="name" name="name" >
						</div>
                        <div class="form_content">
							<label for="number">Phone Number :</label>
							<input type="text" id="number" name="tel">
						</div>
                        <div class="form_content">
							<label for="subject">Sujet :</label>
							<select id="subject" name="selection">
                                <option value=""></option>
                                <option value="feedback">Retour</option>
                                <option value="problem">Un problème ?</option>
                            </select>
						</div>
						<div class="form_content">
							<label for="msg">Message :</label>
							<textarea name="message" id="msg" placeholder="Your message" ></textarea>
						</div>
                        <div  class="button">
                            <button  type="submit">Envoyer votre message</button>
                        </div>
					</form>
			</div>
		</section>



		<footer>
			<div class="footer_content">
				<div class="sauron4ever">
					<a href="#" title="Sauron4ever">Sauron4ever.com</a>
					<a href="#" title="twitter page">Follow him also on twitter</a>
				</div>
				<div class="site_plan">
					<ul>
						<li><a href="#" title="Lorem ipsum">About us</a></li>
						<li><a href="#" title="Lorem ipsum">Fellows</a></li>
						<li><a href="#" title="Lorem ipsum">Join our army</a></li>
					</ul>
					<ul>
						<li><a href="#" title="Lorem ipsum">FAQ</a></li>
						<li><a href="#" title="Lorem ipsum">Reward conditions</a></li>
						<li><a href="#" title="Lorem ipsum">Legal mentions</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>