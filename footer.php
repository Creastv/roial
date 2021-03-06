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
  <?php if ( ! is_front_page()  && !is_singular("software-house") && !is_singular("oferty")) : ?>
  <div class="tri-header">
      <svg class="bg-path" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 985.2 1175.6" xml:space="preserve">
          <g transform="translate(-898.834 311.853)">
              <path fill="none" stroke="#CFCFCF" d="M900.2-73l545.3,935.6" />
              <path fill="none" stroke="#CFCFCF" d="M899.8,396.7L1035,633" />
              <path fill="none" stroke="#CFCFCF" d="M1170.4-74.4l548.3,937.1" />
              <path fill="none" stroke="#CFCFCF" d="M1719.1-72.2L1884.1,208" />
              <path fill="none" stroke="#CFCFCF" d="M1307.6-308.8L899.9,397" />
              <path fill="none" stroke="#CFCFCF" d="M1580.6-299.1L1035,632.6" />
              <path fill="none" stroke="#CFCFCF" d="M1720.4-72.2l-410.3,702" />
              <path fill="none" stroke="#CFCFCF" d="M1884.1,113.8l-278.3,475.4l-160.5,274.3" />
              <path fill="none" stroke="#CFCFCF" d="M1884.1,577.4l-5.8,9.9l-160.5,274.3" />
              <path fill="none" stroke="#CFCFCF" d="M1884.1-72.3L1030.7-72H898.8" />
              <path fill="none" stroke="#CFCFCF" d="M1884.1,160.5l-851.1,0.9" />
              <path fill="none" stroke="#CFCFCF" d="M1884.1,395.6L900.2,397" />
              <path fill="none" stroke="#CFCFCF" d="M1884.1,630.7l-849.1,2.1" />
              <path fill="none" stroke="#CFCFCF" d="M1306.8-309.6l387,666.4l190.3,327.7" />
          </g>
      </svg>
  </div>
  <?php endif; ?>

  <?php wp_footer(); ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw&callback=initMap&v=weekly" async>
  </script>
  </body>

  </html>
