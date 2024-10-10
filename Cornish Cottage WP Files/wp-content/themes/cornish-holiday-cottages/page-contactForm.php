<?php /* Template Name: Contact Form Page Template */ ?>
<?php get_header(); ?>

<?php 
$phone = get_field('phone_number');
$email = get_field('email');
$location = get_field('location');
?>

<main id="content" role="main">
      <div class="formPageContainer">
        <div class="containerCenter">
          <div class="formContainer">
            <div class="propertiesTitle">
              <h1>Contact Us!</h1>
            </div>
			  <p>Please fill in the following form in order to get in contact with us. We would love to hear your input, questions or queries!</p>
			<div class="formDetailsInfo">
				<ul>
				  <li><i class="fas fa-phone"></i> <?php echo $phone; ?></li>
				  <li><i class="fas fa-envelope"></i> <?php echo $email; ?></li>
				  <li><i class="fas fa-map-marker"> <?php echo $location; ?></i></li>
			  </ul>
			</div>
            <div class="formContent">
				<hr id="propDivider">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
</main>

<?php get_footer(); ?>
