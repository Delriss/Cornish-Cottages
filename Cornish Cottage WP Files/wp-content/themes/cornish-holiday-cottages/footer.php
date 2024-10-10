</div>
<footer id="footer" role="contentinfo">
	<div class="footerList">
        <ul>
          <li><i class="fas fa-phone"></i> 01234 567890</li>
          <li><i class="fas fa-envelope"></i> support@cornishcottages.com</li>
          <li>
            <div class="footerSocials">
              <a href="https://www.facebook.com/"
                ><i class="fab fa-facebook"></i
              ></a>
              <a href="https://www.instagram.com/"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            </div>
          </li>
          <li>
            <div id="copyright">
				&copy; <?php echo esc_html( date_i18n( __( 'Y', 'ucwTheme' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</div>
          </li>
          <li>
            <a href="/privacy-policy" id="privPolicy">Privacy Policy</a>
          </li>
        </ul>
      </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>