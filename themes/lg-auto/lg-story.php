<?php
/*
Template Name: LG-Story
*/


get_header();

?>
	<main id="Story" class="site-main site-main-story">
	<div class="swiper-container-parent test" style = " background : url('<?= get_template_directory_uri() . '/assets/imgs/lg_group/background-lg-story.jpg'?> );" >
		<div class="swiper-container" id='story-swip' >
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-id="1989" >
					<div class="container-slide">			 
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/chrysler-logo.png"?>" alt="Logo Chrysler" class="logo-special">
							<figcaption><?= __('Prestige Automobile'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide" data-id="1993">
					<div class="container-slide">
						<figure>
						<a href="../vehicule/jeep/">
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-jeep.png"?>" alt="Prestige Automobile en 1993">
						</a>
							<figcaption><?= __('Prestige Automobile'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="1998">
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Déménagement Site Fauceille">
							<figcaption><?= __('Déménagement sur le site de Fauceil'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2000">
					<div class="container-slide">	
						<figure>
							<a href="../vehicule/smart/">
								<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-smart.jpg"?>" alt="Smart Logo">
							</a>	
							<figcaption><?= __('Distribution et réparation'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">		
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-porsche.png"?>" alt="Smart Logo">
							<figcaption><?= __('Spécialiste Porsche'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2004">
				<div class="container-slide">		
					<a href="../vehicule/camion/">
								<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-fuso-w.png"?>" alt="Logo Fuso Mitsubishi Truck blanc">
						</a>							
						<ul><?= __('
								<li>• LG Béziers réparateur agréé Fuso</li>
								<li>• Monopole réparateur agréé Fuso</li>
								<li>• LG Carcassonne réparateur agréé Fuso</li>
								<li>• LG Béziers réparateur agréé Fuso</li>
								'); ?>
						</ul>
					</div>
				</div>		
				<div class="swiper-slide"data-id="2005">
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Logo Holding LG Automobiles">
							<figcaption><?= __('Création de la Holding'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">		
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Mercedes-Benz">
							<figcaption><?= __('Distribution et réparation'); ?></figcaption>
						</figure>
					</div>	
					<div class="container-slide">		
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Ancien Monopole Mercedes-Benz">
							<figcaption><?= __('Rachat concession Monopole'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2010">
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Mercedes-Benz">
							<figcaption><?= __('Rachat MB Béziers (SABVI)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Mercedes-Benz">
							<figcaption><?= __('Lancement LG Béziers Automobiles'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2011">
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Site Carcassonne Mercedes-Benz">
							<figcaption><?= __('Rachat Site Carcassonne (Montanari)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">	
						<figure>						
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Site Narbonne Mercedes-Benz">
							<figcaption><?= __('Rachat Site Narbonne (Montanari)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">	
						<figure>
						<a href="../vehicule/yamaha/">
							<img src="<?= get_template_directory_uri() . "/assets/imgs/lg_group/YAMAHA.png"?>" alt="Logo Yamaha" class="logo-special">
						</a>
							<figcaption><?= __('Rachat Yam66'); ?></figcaption>
						</figure>
					</div>	
				</div>
				<div class="swiper-slide"data-id="2012">
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="site de Béziers">
							<figcaption><?= __('Déménagement site de Béziers'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2013">
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Site de Béziers">
							<figcaption><?= __('Inauguration site de Béziers'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2014">
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Photo site Yam66">
							<figcaption><?= __('Ouverture et Inauguration site de Yam66'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Site de Carcassonne">
							<figcaption><?= __('Déménagement site de Carcassonne'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2015">
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="site de Carcassonne">
							<figcaption><?= __('Inauguration site de Carcassonne'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<a href="https://b-now.com/" target="_blank">
								<img src="<?= get_template_directory_uri() . "/assets/imgs/story/b-now-logo.png"?>" alt="Agence BNow" class="logo-special">
							</a>
							<figcaption><?= __('Lancement Agence BNow'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2017">
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-premium-center-w.png"?>" alt="Logo Premium Center" class="logo-special">
							<figcaption><?= __('Ouverture Premium Center'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2018">
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Photo LG Toulouse">
							<figcaption><?= __('Rachat Toulouse (Groupe Pautric)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Photo LG Muret">
							<figcaption><?= __('Rachat Muret (Groupe Pautric)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Photo LG Castres">
							<figcaption><?= __('Rachat Castres (Groupe Pautric)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Photo LG Castres">
							<figcaption><?= __('Rachat Albi (Groupe Pautric)'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-jeep.png"?>" alt="Logo Jeep">
							<ul><?= __('
								<li>• Rachat Jeep Narbonne</li>
								<li>• Rachat Jeep Carcassonne</li>
								<li>• Rachat Jeep Béziers</li>
								'); ?>
							</ul>
						</div>
				</div>
				<div class="swiper-slide"data-id="2019">
					<div class="container-slide">	
						<figure>
							<a href="../vehicules/indian">
								<img src="<?= get_template_directory_uri() . "/assets/imgs/lg_group/INDIAN.png"?>" alt="Logo Indian"class="logo-special">
							</a>
							<figcaption><?= __('Distribution marque Indian'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-lg-rent-w.jpg"?>" alt="Logo Groupe LG Rent" class="logo-special">
							<figcaption><?= __('Lancement LG Rent'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-premium-center-w.png"?>" alt="Logo Premium Center" class="logo-special">
							<figcaption><?= __('Inauguration Premium Center'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2020">
					<div class="container-slide">
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Photos des pierres personnalisées">
							<figcaption><?= __('Pose 1ère pierre construction'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Logo Madame LG">
							<figcaption><?= __('Lancement Label Madame LG'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">	
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/"?>" alt="Marketing Lab logo">
							<figcaption><?= __('Création et logo'); ?></figcaption>
						</figure>
					</div>
					<div class="container-slide">		
						<figure>
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-lg-groupe-w.png"?>" alt="Groupe LG logo">
							<figcaption><?= __('LG Automobiles devient Groupe LG'); ?></figcaption>
						</figure>
					</div>
				</div>
				<div class="swiper-slide"data-id="2021">
					<div class="container-slide">
						<a href="../lg-mercedes-benz">
							<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-mercedes.png"?>" alt="Logo Mercedes-Benz">
						</a>
						<ul><?= __('
								<li>• Rachat</li>
								<li>• Rachat</li>
								<li>• Rachat</li>
								<li>• Rachat</li>
								<li>• Rachat</li>
								<li>• Rachat</li>
								'); ?>
						</ul>
					</div>
					<div class="container-slide">	
					<a href="../vehicules/jeep">
						<img src="<?= get_template_directory_uri() . "/assets/imgs/story/logo-jeep.png"?>" alt="Logo Jeep">
					</a>	
						<ul><?= __('
							<li>• Construction Carcassonne</li>
							<li>• Construction Narbonne</li>
							<li>• Construction Béziers</li>
							'); ?>
						</ul>
					</div>
					<div class="container-slide">
					<figure>
					<a href="../vehicules/indian">
						<img src="<?= get_template_directory_uri() . "/assets/imgs/lg_group/INDIAN.png"?>" alt="Logo Indian">
					</a>	
						<figcaption><?= __('Inauguration Indian Motorcycle P'); ?></figcaption>
					</figure>
					</div>	
				</div>
			</div>
			<!-- Add Pagination -->
		</div>
		<div class="swiper-pagination"></div>
	</div>	
	</main><!-- #main -->
<?php
get_footer();
