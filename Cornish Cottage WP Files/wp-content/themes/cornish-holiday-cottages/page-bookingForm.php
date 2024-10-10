<?php /* Template Name: Booking Form Page Template */ ?>
<?php get_header(); ?>

<main id="content" role="main">
      <div class="formPageContainer">
        <div class="containerCenter">
          <div class="formContainer">
            <div class="propertiesTitle">
              <h1>Create a Booking!</h1>
            </div>
			<div>
			  <p>Please fill in the following form in order to get book with us. We will try and fulfil your request and respond to you as soon as possible!</p>
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
