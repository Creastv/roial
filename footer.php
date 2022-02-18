  </div>
  </main>
  <footer id="footer">
      <div id="contact-footer">
          <div class="row">
              <div class="col contact__info">
                  <div class="contact___header">
                      <p class="color-main"><span class="color-black">Porozmawiajmy<br>o</span> Twoich celach
                          </br>biznesowych.</p>
                  </div>
                  <div class="contact___detail">
                      <div class="wraper">
                          <div class="contact-wraper">
                              <?php get_template_part('template-parts/footer/site-contact'); ?>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col contact__form">
                  <div class="wraper">
                      <?php echo do_shortcode('[contact-form-7 id="28" title="Formularz 1"]');  ?>
                  </div>
              </div>
          </div>
      </div>
      <?php get_template_part('template-parts/footer/site-google-map'); ?>
  </footer>
  <span id="go-to-top">
      <span>top</span>
  </span>
  <?php get_template_part('template-parts/extras/stickier-contact'); ?>

  <?php wp_footer(); ?>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw&callback=initMap&v=weekly"
      async></script>
  </body>

  </html>