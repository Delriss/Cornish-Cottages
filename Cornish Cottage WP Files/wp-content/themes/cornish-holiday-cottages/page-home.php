<?php /* Template Name: Holiday Home Page */ ?>
<?php get_header(); ?>

<?php
	$hero = get_field('hero');
	$card1 = get_field('card_1');
	$card2 = get_field('card_2');
	$card3 = get_field('card_3');
	$slider = get_field('slider_header');
	$about = get_field('about');
?>

<main id="content" role="main"> 
	
	<div class="hero">
        	<div class="heroContainer">
          		<h1><?php echo $hero['hero_header']; ?></h1>
          		<p><?php echo $hero['hero_subtext']; ?></p>
				<a href="<?php echo $hero['hero_button_link']; ?>" class="btnHeroView"><?php echo $hero['hero_button_text']; ?></a>
        	</div>
	</div>
	
		<div class="container">
			<div class="containerCenter">		
				<div class="cardBox">
					<section class="card">
						<img class="cardIMG" src="<?php echo $card1['card_1_image']; ?>"/>
						<div class="cardContent">
							<h3><?php echo $card1['card_1_header']; ?></h3>
							<p><?php echo $card1['card_1_subtext']; ?></p>
							<a href="<?php echo $card1['card_1_button_link']; ?>" class="btnViewCottages"><?php echo $card1['card_1_button_text']; ?></a>
						</div>
					</section>

					<section class="card">
						<img class="cardIMG" src="<?php echo $card2['card_2_image']; ?>"/>
						<div class="cardContent">
							<h3><?php echo $card2['card_2_header']; ?></h3>
							<p><?php echo $card2['card_2_subtext']; ?></p>
							<a href="<?php echo $card2['card_2_button_link']; ?>" class="btnViewCottages"><?php echo $card2['card_2_button_text']; ?></a>
						</div>
					</section>

					<section class="card">
						<img class="cardIMG" src="<?php echo $card3['card_3_image']; ?>"/>
						<div class="cardContent">
							<h3><?php echo $card3['card_3_header']; ?></h3>
							<p><?php echo $card3['card_3_subtext']; ?></p>
							<a href="<?php echo $card3['card_3_button_link']; ?>" class="btnViewCottages"><?php echo $card3['card_3_button_text']; ?></a>
						</div>
					</section>

				</div>
			</div>

			<div class="sliderContainer">
				<h2 id="sliderText">
						<?php echo $slider; ?>
				</h2>
				<div>
					<?php
						echo do_shortcode('[smartslider3 slider="3"]');
					?> 
				</div>
			</div>

			<div class="quickAbout">
			  <div class="aboutIMGcontainer"></div>
			  <div class="aboutInfo">
				<h2><?php echo $about['about_header']; ?></h2>
				<p id="aboutText">
				  <?php echo $about['about_text']; ?>
				</p>
			  </div>
			</div>
      </div>
</main>
<?php get_footer(); ?>
