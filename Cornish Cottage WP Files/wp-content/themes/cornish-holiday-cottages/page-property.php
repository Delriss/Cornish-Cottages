<?php /* Template Name: Property Template */ ?>
<?php get_header(); ?>

<?php
	$propertyInfo = get_field('basic_property_info');
	$propertyIcons = get_field('property_icon_info');
	$buttonInfo = get_field('button_info');
?>

<main id="content" role="main">
	<div class="container">
        <div class="containerPropCenter">
          <div class="propertyContainer">
            <div class="propertyIMG">
              <img src="<?php echo $propertyInfo['property_image']; ?>" alt="Image of the cornwall property" />
            </div>
            <div class="propertyContent">
              <div class="propTitle">
                <?php echo $propertyInfo['property_title']; ?>
              </div>

              <hr id="propDivider">

              <div class="propDesc">
                <?php echo $propertyInfo['property_description']; ?>
              </div>

              <div class="propDetails">
                <p><strong>Price:</strong> £<?php echo $propertyInfo['price']; ?> per <?php echo $propertyInfo['price_per_time']; ?></p>
                <p><strong>Location:</strong> <?php echo $propertyInfo['location']; ?></p>
                <p><strong>Bedrooms:</strong> <?php echo $propertyInfo['bedrooms']; ?></p>
				<div class="reviewScore">
					<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id"]') ?>
				</div>
              </div>
              <!-- Icons for Pet Friendly, etc with yes or no-->
              <div class="propertyIcons">
                <div class="propertyIcon">
                  <i class="fas fa-dog"></i>
                  <span><?php echo $propertyIcons['pet_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-smoking-ban"></i>
                  <span><?php echo $propertyIcons['smoking_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-wifi"></i>
                  <span><?php echo $propertyIcons['wifi_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-parking"></i>
                  <span><?php echo $propertyIcons['parking_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-utensils"></i>
                  <span><?php echo $propertyIcons['catering_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-tv"></i>
                  <span><?php echo $propertyIcons['tv_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-bath"></i>
                  <span><?php echo $propertyIcons['facilities_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-bed"></i>
                  <span><?php echo $propertyIcons['linen_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-thermometer-half"></i>
                  <span><?php echo $propertyIcons['heating_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-utensils"></i>
                  <span><?php echo $propertyIcons['kitchen_text']; ?></span>
                </div>
                <div class="propertyIcon">
                  <i class="fas fa-wind"></i>
                  <span><?php echo $propertyIcons['fire_text']; ?></span>
                </div>
              </div>
              <a href="<?php echo $buttonInfo['button_link']; ?>" class="btnViewCottages"><?php echo $buttonInfo['button_text']; ?></a>
            </div>
          </div>
			
			<div class="reviewFormContainer">
				<div id="reviewForm">
					<?php echo do_shortcode('[site_reviews_form assigned_posts="post_id"]') ?>
				</div>
			 </div>
			
			<hr id="propDivider">
			<div class="propertiesContainer">
            <div class="propertiesTitle">
              <h1>View our other properties</h1>
            </div>

            <div class="propertyCardBox">
			<?php
			  $args = array(
				'post_type' => 'page',
				'meta_key' => '_wp_page_template',
				'meta_value' => 'page-property.php'
			  );
			  $query = new WP_Query($args);
			  $currentPermalink = get_permalink();
			  // Check if there are any pages that use the custom template
			  if ($query->have_posts()) {
				// Loop through each page and display content onto card.
				while ($query->have_posts()) {
					$query->the_post();
					$pagePermalink = get_permalink();
					$propertyInfo = get_field('basic_property_info');
					$propertyIcons = get_field('property_icon_info');
					$buttonInfo = get_field('button_info');
					
					if($currentPermalink == $pagePermalink)
					{
						continue;
					}
			  ?>

				  <div class="propertyCard">
					<div class="propertyCardIMG">
					  <img src="<?php echo $propertyInfo['property_image']; ?>" alt="" />
					</div>
					<div class="propertyCardContent">
					  <div class="propTitle"><?php echo $propertyInfo['property_title']; ?></div>

					  <hr id="propDivider" />

					  <div class="propDetails">
						<p><strong>Price:</strong> £<?php echo $propertyInfo['price']; ?> per <?php echo $propertyInfo['price_per_time']; ?></p>
						<p><strong>Location:</strong> <?php echo $propertyInfo['location']; ?></p>
						<p><strong>Bedrooms:</strong> <?php echo $propertyInfo['bedrooms']; ?></p>
						<div class="reviewScore">
							<?php echo do_shortcode('[site_reviews_summary assigned_posts="post_id"]') ?>
						</div>
					  </div>
					  <!-- Icons for Pet Friendly, etc with yes or no-->
					  <div class="propertyIcons">
						<div class="propertyIcon">
						  <i class="fas fa-dog"></i>
						  <span><?php echo $propertyIcons['pet_text']; ?></span>
						</div>
						<div class="propertyIcon">
						  <i class="fas fa-smoking-ban"></i>
						  <span><?php echo $propertyIcons['smoking_text']; ?></span>
						</div>
						<div class="propertyIcon">
						  <i class="fas fa-parking"></i>
						  <span><?php echo $propertyIcons['parking_text']; ?></span>
						</div>
					  </div>
					  <a href="<?php the_permalink(); ?>" class="btnViewCottages">View Property</a>
					</div>
				  </div>

			  <?php
				}
				// Reset post data
				wp_reset_postdata();
			  } else {
				// If there are no pages that use the custom template, display a message
				echo '<p>No pages found.</p>';
			  }
			  ?>
            </div>
          </div>
        </div>
      </div>
</main>
<?php get_footer(); ?>